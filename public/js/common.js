function getURLVar(key) {
    var value = [];

    var query = String(document.location).split('?');

    if (query[1]) {
        var part = query[1].split('&');

        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');

            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }

        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
}

$(document).ready(function() {

    var cols = $('#column-right, #column-left').length;

    if (cols && cols == 2) {
        $('#content .product-grid').attr('class', 'product-layout product-grid col-sm-6 col-md-6');
    } else if (cols == 1) {
        $('#content .product-grid').attr('class', 'product-layout product-grid col-sm-6 col-lg-6 col-xl-4');
    } else {
        $('#content .product-grid').attr('class', 'product-layout product-grid col-sm-6 col-lg-4 col-xl-3');
    }

    // Highlight any found errors
    $('.text-danger').each(function() {
        var element = $(this).parent().parent();

        if (element.hasClass('form-group')) {
            element.addClass('has-error');
        }
    });

    // Currency
    $('#form-currency .currency-select').on('click', function(e) {
        e.preventDefault();

        $('#form-currency input[name=\'code\']').val($(this).attr('name'));

        $('#form-currency').submit();
    });

    // Language
    $('#form-language .language-select').on('click', function(e) {
        e.preventDefault();

        $('#form-language input[name=\'code\']').val($(this).attr('name'));

        $('#form-language').submit();
    });

    /* Search */
    $('#search input[name=\'search\']').parent().find('button').on('click', function() {
        var url = $('base').attr('href') + 'index.php?route=product/search';

        var value = $('header #search input[name=\'search\']').val();

        if (value.length > 0) {
            url += '&search=' + encodeURIComponent(value);
            location = url;
        }

    });

    $('#search input[name=\'search\']').on('keydown', function(e) {
        if (e.keyCode == 13) {
            $('header #search input[name=\'search\']').parent().find('button').trigger('click');
        }
    });

    /* Blog Search */
    $('#oct-blog-search-button').on('click', function() {
        let url = $('base').attr('href') + 'index.php?route=octemplates/blog/oct_blogsearch';

        let value = $('#blog_search input[name=\'blog_search\']').val();

        if (value.length > 0) {
            url += '&search=' + encodeURIComponent(value);
            location = url;
        }

    });

    $('#blog_search input[name=\'blog_search\']').on('keydown', function(e) {
        if (e.keyCode == 13) {
            $('#oct-blog-search-button').trigger('click');
        }
    });

    // Menu
    $('#menu .dropdown-menu').each(function() {
        var menu = $('#menu').offset();
        var dropdown = $(this).parent().offset();

        var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 10) + 'px');
        }
    });

    // Product List
    $('#list-view').click(function() {
        $('#content .row > .product-grid').attr('class', 'product-layout product-list col-12');
        $('.product-list > .us-module-item').removeClass('flex-column').addClass('flex-row align-items-center');
        $('.product-list > .us-module-item .us-module-rating').removeClass('justify-content-center').addClass('justify-content-start');
        $('.product-list > .us-module-item .us-module-title').removeClass('flex-grow-1');
        $('#grid-view').removeClass('active');
        $('#list-view').addClass('active');

        localStorage.setItem('display', 'list');
    });

    // Product Grid
    $('#grid-view').click(function() {
        // What a shame bootstrap does not take into account dynamically loaded columns
        var cols = $('#column-right, #column-left').length;

        if (cols == 2) {
            $('#content .product-list').attr('class', 'product-layout product-grid col-sm-6 col-md-6');
        } else if (cols == 1) {
            $('#content .product-list').attr('class', 'product-layout product-grid col-sm-6 col-lg-6 col-xl-4');
        } else {
            $('#content .product-list').attr('class', 'product-layout product-grid col-sm-6 col-lg-4 col-xl-3');
        }

        $('.product-layout > .us-module-item').removeClass('flex-row  align-items-center').addClass('flex-column');
        $('.product-layout > .us-module-item .us-module-rating').removeClass('justify-content-start').addClass('justify-content-center');
        $('.product-layout > .us-module-item .us-module-title').addClass('flex-grow-1');

        $('#list-view').removeClass('active');
        $('#grid-view').addClass('active');

        localStorage.setItem('display', 'grid');
    });

    if (localStorage.getItem('display') == 'list') {
        $('#list-view').trigger('click');
        $('#list-view').addClass('active');
    } else {
        $('#grid-view').trigger('click');
        $('#grid-view').addClass('active');
    }

    // Checkout
    $(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
        if (e.keyCode == 13) {
            $('#collapse-checkout-option #button-login').trigger('click');
        }
    });

    // tooltips on hover
    $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

    // Makes tooltips work on ajax generated content
    $(document).ajaxStop(function() {
        $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
    });

    $('body').on('click', '#filter-view', function() {
        $('.rdf-mobile-toggle').click();
    });
});

// Cart add remove functions
var cart = {
    'add': function(product_id, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                $('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error'] && json['error']['error_warning']) {
                    usNotify('danger', '<div class="alert-text-item">' + json['error']['error_warning'] + '</div>');
                }

                if (json['success']) {
                    usNotify('success', json['success']);

                    if(typeof octYandexEcommerce == 'function') {
                        octYandexEcommerce(json);
                    }

                    // Need to set timeout otherwise it wont update the total
                    setTimeout(function () {
                        $('#oct-cart-quantity, .header-cart-index, #mobile_cart_index').html(json['total_products']);
                        $('.us-cart-text').html(json['total_amount']);
                    }, 100);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'update': function(key, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/edit',
            type: 'post',
            data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                // Need to set timeout otherwise it wont update the total
                setTimeout(function () {
                    $('#oct-cart-quantity, .header-cart-index, #mobile_cart_index').html(json['total_products']);
                    $('.us-cart-text').html(json['total_amount']);
                }, 100);

                var now_location = String(document.location.pathname);

                if ((now_location == '/cart/') || (now_location == '/checkout/') || (getURLVar('route') == 'checkout/cart') || (getURLVar('route') == 'checkout/checkout')) {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function(key) {
        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                // Need to set timeout otherwise it wont update the total
                setTimeout(function () {
                    //$('#oct-cart-quantity, .header-cart-index, .mobile-header-index').html(json['total_products']);
                    //$('.us-cart-text').html(json['total_amount']);
                }, 100);

                var now_location = String(document.location.pathname);

                if ((now_location == '/cart/') || (now_location == '/checkout/') || (getURLVar('route') == 'checkout/cart') || (getURLVar('route') == 'checkout/checkout')) {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var voucher = {
    'add': function() {

    },
    'remove': function(key) {
        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                // Need to set timeout otherwise it wont update the total
                setTimeout(function () {
                    $('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
                }, 100);

                var now_location = String(document.location.pathname);

                if ((now_location == '/cart/') || (now_location == '/checkout/') || (getURLVar('route') == 'checkout/cart') || (getURLVar('route') == 'checkout/checkout')) {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var wishlist = {
    'add': function(product_id) {
        $.ajax({
            url: 'index.php?route=account/wishlist/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            cache: false,
            success: function(json) {
                $('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['success']) {
                    usNotify('success', json['success']);
                    $('#oct-wishlist-quantity').html(json['total_wishlist']);
                }

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}

var compare = {
    'add': function(product_id) {
        $.ajax({
            url: 'index.php?route=product/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            cache: false,
            success: function(json) {
                $('.alert-dismissible').remove();

                if (json['success']) {
                    usNotify('success', json['success']);
                    $('#oct-compare-quantity').html(json['total_compare']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}

var octsearch = {
    'search': function(key, type) {
        $.ajax({
            url: 'index.php?route=octemplates/module/oct_live_search',
            type: 'post',
            data: 'key=' + key,
            dataType: 'html',
            cache: false,
            success: function(data) {
                $('#us_livesearch').html(data).addClass('expanded');

                if(data = data.match(/livesearch/g)) {
                    $('#us_livesearch_close').addClass('visible');
                } else {
                    $('#us_livesearch_close').removeClass('visible');
                }
            }
        });
    }
}

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
    e.preventDefault();

    $('#modal-agree').remove();

    var element = this,
        link = '';
    let r = $(element).data('rel');

    if (r && r != 'undefined') {
        link = 'index.php?route=information/information/agree&information_id='+r;
    } else {
        link = $(element).attr('href');
    }

    $.ajax({
        url: link,
        type: 'get',
        dataType: 'html',
        cache: false,
        success: function(data) {
            html  = '<div class="modal show" id="modal-agree" tabindex="-1" role="dialog" aria-labelledby="modal-agree" aria-hidden="true">';
            html += '  <div class="modal-dialog modal-dialog-centered" role="document">';
            html += '    <div class="modal-content">';
            html += '      <div class="modal-header">';
            html += '        <h5 class="modal-title">' + $(element).text() + '</h5>';
            html += '        <button type="button" class="us-close" data-dismiss="modal" aria-label="Close">';
            html += '        	<span aria-hidden="true" class="us-modal-close-icon us-modal-close-left"></span>';
            html += '        	<span aria-hidden="true" class="us-modal-close-icon us-modal-close-right"></span>';
            html += '        </button>';
            html += '      </div>';
            html += '      <div class="modal-body">' + data + '</div>';
            html += '    </div>';
            html += '  </div>';
            html += '</div>';

            $('body').append(html);

            $('#modal-agree').modal('show');
        }
    });
});

// Autocomplete */
(function($) {
    $.fn.autocomplete = function(option) {
        return this.each(function() {
            this.timer = null;
            this.items = new Array();

            $.extend(this, option);

            $(this).attr('autocomplete', 'off');

            // Focus
            $(this).on('focus', function() {
                this.request();
            });

            // Blur
            $(this).on('blur', function() {
                setTimeout(function(object) {
                    object.hide();
                }, 200, this);
            });

            // Keydown
            $(this).on('keydown', function(event) {
                switch(event.keyCode) {
                    case 27: // escape
                        this.hide();
                        break;
                    default:
                        this.request();
                        break;
                }
            });

            // Click
            this.click = function(event) {
                event.preventDefault();

                value = $(event.target).parent().attr('data-value');

                if (value && this.items[value]) {
                    this.select(this.items[value]);
                }
            }

            // Show
            this.show = function() {
                var pos = $(this).position();

                $(this).siblings('ul.dropdown-menu').css({
                    top: pos.top + $(this).outerHeight(),
                    left: pos.left
                });

                $(this).siblings('ul.dropdown-menu').show();
            }

            // Hide
            this.hide = function() {
                $(this).siblings('ul.dropdown-menu').hide();
            }

            // Request
            this.request = function() {
                clearTimeout(this.timer);

                this.timer = setTimeout(function(object) {
                    object.source($(object).val(), $.proxy(object.response, object));
                }, 200, this);
            }

            // Response
            this.response = function(json) {
                html = '';

                if (json.length) {
                    for (i = 0; i < json.length; i++) {
                        this.items[json[i]['value']] = json[i];
                    }

                    for (i = 0; i < json.length; i++) {
                        if (!json[i]['category']) {
                            html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
                        }
                    }

                    // Get all the ones with a categories
                    var category = new Array();

                    for (i = 0; i < json.length; i++) {
                        if (json[i]['category']) {
                            if (!category[json[i]['category']]) {
                                category[json[i]['category']] = new Array();
                                category[json[i]['category']]['name'] = json[i]['category'];
                                category[json[i]['category']]['item'] = new Array();
                            }

                            category[json[i]['category']]['item'].push(json[i]);
                        }
                    }

                    for (i in category) {
                        html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

                        for (j = 0; j < category[i]['item'].length; j++) {
                            html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
                        }
                    }
                }

                if (html) {
                    this.show();
                } else {
                    this.hide();
                }

                $(this).siblings('ul.dropdown-menu').html(html);
            }

            $(this).after('<ul class="dropdown-menu"></ul>');
            $(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));

        });
    }
})(window.jQuery);


function Anketa_Open_Button(Company_Fouder,Company_Name,Company_URL,Company_E_mail,Name, Cost, EntryPoint,ProductArray){
    Cost=Cost.replace(/ /g,"");
    Cost=Cost.match(/(\d*)\.?(\d*)(,|\.){0,1}(\d+)/)[0];
    Cost=Cost.replace(/^(\d*)\.?(\d*)(\.|,)(\d+)$/,"$1$2$3$4");
    Cost=Cost.replace(/,/,".");

    var Path='https://iforms.forward-bank.com/itrade/data/files/new_design/index.php?Company_Fouder='+Company_Fouder+'&Company_Name='+Company_Name+'&Company_URL='+Company_URL+'&Company_E_mail='+Company_E_mail+'&prArr[]='+ProductArray+'&EntP='+EntryPoint+'&cost='+Cost+'&name='+Name+'';
    var Options='width=1000,height=830,top='+((screen.height-540)/2)+',left='+((screen.width-750)/2)+',toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no';

    window.open(Path,'gener',Options);
}

function Anketa_Open_Link(EntryPoint,ProductArray){
    var Path='https://iforms.forward-bank.com/itrade/data/files/new_design/index.php?cost=&name=&EntP='+EntryPoint+'&prArr[]='+ProductArray+'';
    var Options='width=840,height=410,top='+((screen.height-340)/2)+',left='+((screen.width-750)/2)+',toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no';

    window.open(Path,'gener',Options);
}