<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__377df4ab535a73aad45d57634579596ce774fe08d1cb564c1c342300c5083864 */
class __TwigTemplate_a80ed0caae2baf3a4c51faf7cd9fb7b717613fc57c7ffbe2c4d5d3351cef3155 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__377df4ab535a73aad45d57634579596ce774fe08d1cb564c1c342300c5083864"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__377df4ab535a73aad45d57634579596ce774fe08d1cb564c1c342300c5083864"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestafab/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestafab/img/app_icon.png\" />

<title>Modules catalog • prestaFab</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsMboModule';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'MA';
    var _PS_VERSION_ = '1.7.7.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '423ba19a9afd11d821cbdd62c71d627e';
    var token_admin_orders = 'a96899f778f46fd9285f6232802e8904';
    var token_admin_customers = 'e1bde2baca2324cb592d35707c8ba83f';
    var token_admin_customer_threads = '20a003b652fa98deb1a96e186a66dd08';
    var currentIndex = 'index.php?controller=AdminPsMboModule';
    var employee_token = '0df8d35ea1d647b5fa4774f2ed514600';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestafab/admin746mnijdb/index.php/improve/modules/catalog/recommended?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8';
    var admin_notification_get_link = '/prestafab/admin746mnijdb/index.php/common/notifications?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8';
    var admin_notification_push_link = '/prestafab/admin746mnijdb/index.php/common/notifications/ack?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/prestafab/admin746mnijdb/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/admin746mnijdb/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestafab\\/admin746mnijdb\\/\";
var baseDir = \"\\/prestafab\\/\";
var changeFormLanguageUrl = \"\\/prestafab\\/admin746mnijdb\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\";
var currency = {\"iso_code\":\"MAD\",\"sign\":\"MAD\",\"name\":\"Moroccan Dirham\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MAD\",\"currencySymbol\":\"MAD\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/admin.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/tools.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestafab/admin746mnijdb/index.php/common/notifications?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8080\\/prestafab\\/admin746mnijdb\\/index.php?controller=AdminGamification&token=2ae2b29272bb41f3d478829828e10337\";
            var current_id_tab = 133;
        </script>

";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-en adminpsmbomodule\"
  data-base-url=\"/prestafab/admin746mnijdb/index.php\"  data-token=\"Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminDashboard&amp;token=681f69bf50a1acfcc5b9b104f5bc76f1\"></a>
      <span id=\"shop_version\">1.7.7.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3dac1a2c6afe16ab927d8d96a75f8fda\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php/improve/modules/manage?token=1a9ef1dcb637d8de0f34f6a1c15a244c\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php/sell/catalog/categories/new?token=1a9ef1dcb637d8de0f34f6a1c15a244c\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php/sell/catalog/products/new?token=1a9ef1dcb637d8de0f34f6a1c15a244c\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e917952f74ca1f544272f49db723c9a5\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminOrders&amp;token=a96899f778f46fd9285f6232802e8904\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"194\"
        data-icon=\"icon-AdminParentModulesCatalog\"
        data-method=\"add\"
        data-url=\"index.php/modules/addons/modules/catalog?-c3rLEQF8\"
        data-post-link=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminQuickAccesses&token=a4941ec7e2067ade2690c76496f7f5cf\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Module Catalog - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminQuickAccesses&token=a4941ec7e2067ade2690c76496f7f5cf\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestafab/admin746mnijdb/index.php?controller=AdminSearch&amp;token=5945f23b5844138a5e058b8befe4d8ad\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
             href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/performance/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/prestafab/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Did you check your conversion rate lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you considered selling on marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              That's more time for something else!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/azzouz.youssef96%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Youssef</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/employees/1/edit?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\">
      <i class=\"material-icons\">settings</i>
      Your profile
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminLogin&amp;logout=1&amp;token=a931d3410bead54c7bd5e75fd61eef01\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestafab/admin746mnijdb/index.php/configure/advanced/employees/toggle-navigation?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminDashboard&amp;token=681f69bf50a1acfcc5b9b104f5bc76f1\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/invoices/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/credit-slips/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/delivery-slips/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCarts&amp;token=5bef95a1bd6bb5fa230d4a843d85cb5e\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/products?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/products?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/categories?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/monitoring/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminAttributesGroups&amp;token=c0cc9de9823ed8c9fc30556d3b981d55\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/brands/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/attachments/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCartRules&amp;token=e917952f74ca1f544272f49db723c9a5\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/stocks/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/sell/customers/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/customers/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/addresses/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCustomerThreads&amp;token=20a003b652fa98deb1a96e186a66dd08\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCustomerThreads&amp;token=20a003b652fa98deb1a96e186a66dd08\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/customer-service/order-messages/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminReturn&amp;token=bf9bda36e06a6dda3895b429c730074f\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminMetricsStats&amp;token=ead03e8a582befa040b802e08d394de9\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-AdminMetricsStats\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminMetricsStats&amp;token=ead03e8a582befa040b802e08d394de9\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminLegacyStatsMetrics\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminLegacyStatsMetrics&amp;token=e8a0e3f3652025d88bebec4278b761bf\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/modules/manage?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/modules/manage?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/modules/catalog?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/themes/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/themes/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/themes/catalog?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/mail_theme/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/cms-pages/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/modules/positions/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminImages&amp;token=1d61ede1e0dc8a7dddc48608fd29427d\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/modules/link-widget/list?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCarriers&amp;token=c1fd72f1af28841cbfe4e1b99a268af5\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCarriers&amp;token=c1fd72f1af28841cbfe4e1b99a268af5\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/shipping/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/payment/payment_methods?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/payment/payment_methods?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/payment/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/localization/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/localization/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminZones&amp;token=0d927e2ed516ac56be25145654710b90\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/taxes/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/translations/settings?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/preferences/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/preferences/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/order-preferences/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/product-preferences/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/customer-preferences/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/contacts/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/seo-urls/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminSearchConf&amp;token=7eca80d4bb156ae022336220c1102539\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminGamification&amp;token=2ae2b29272bb41f3d478829828e10337\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/system-information/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/system-information/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/performance/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/administration/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/emails/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/import/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/employees/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/sql-requests/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/logs/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/webservice-keys/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Catalog</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Modules catalog          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Connect to Addons marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Connect to Addons marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestafab/admin746mnijdb/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminModules%253Fversion%253D1.7.7.5%2526country%253Den/Help?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/modules/catalog?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" id=\"subtab-AdminPsMboModule\" class=\"nav-link tab active current\" data-submenu=\"133\">
                      Module Catalog
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/modules/catalog/selection?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" id=\"subtab-AdminPsMboAddons\" class=\"nav-link tab \" data-submenu=\"134\">
                      Module Selections
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
    <!-- begin C:\\wamp64\\www\\prestafab/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended Modules and Services',
        'Close': 'Close',
      },
      recommendedModulesUrl: '/prestafab/admin746mnijdb/index.php/modules/addons/modules/recommended?tabClassName=AdminPsMboModule&_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\wamp64\\www\\prestafab/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1154
        $this->displayBlock('content_header', $context, $blocks);
        // line 1155
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1156
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1157
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1158
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminDashboard&amp;token=681f69bf50a1acfcc5b9b104f5bc76f1\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=azzouz.youssef96%40gmail.com&amp;firstname=Youssef&amp;lastname=Azzouz&amp;website=http%3A%2F%2Flocalhost%3A8080%2Fprestafab%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestafab/admin746mnijdb/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=azzouz.youssef96%40gmail.com&amp;firstname=Youssef&amp;lastname=Azzouz&amp;website=http%3A%2F%2Flocalhost%3A8080%2Fprestafab%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1265
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 101
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1154
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1155
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1156
    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1157
    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1265
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__377df4ab535a73aad45d57634579596ce774fe08d1cb564c1c342300c5083864";
    }

    public function getDebugInfo()
    {
        return array (  1439 => 1265,  1422 => 1157,  1405 => 1156,  1388 => 1155,  1371 => 1154,  1338 => 101,  1324 => 1265,  1215 => 1158,  1212 => 1157,  1209 => 1156,  1206 => 1155,  1204 => 1154,  147 => 101,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestafab/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestafab/img/app_icon.png\" />

<title>Modules catalog • prestaFab</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsMboModule';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'MA';
    var _PS_VERSION_ = '1.7.7.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '423ba19a9afd11d821cbdd62c71d627e';
    var token_admin_orders = 'a96899f778f46fd9285f6232802e8904';
    var token_admin_customers = 'e1bde2baca2324cb592d35707c8ba83f';
    var token_admin_customer_threads = '20a003b652fa98deb1a96e186a66dd08';
    var currentIndex = 'index.php?controller=AdminPsMboModule';
    var employee_token = '0df8d35ea1d647b5fa4774f2ed514600';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestafab/admin746mnijdb/index.php/improve/modules/catalog/recommended?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8';
    var admin_notification_get_link = '/prestafab/admin746mnijdb/index.php/common/notifications?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8';
    var admin_notification_push_link = '/prestafab/admin746mnijdb/index.php/common/notifications/ack?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/prestafab/admin746mnijdb/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/admin746mnijdb/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestafab/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestafab\\/admin746mnijdb\\/\";
var baseDir = \"\\/prestafab\\/\";
var changeFormLanguageUrl = \"\\/prestafab\\/admin746mnijdb\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\";
var currency = {\"iso_code\":\"MAD\",\"sign\":\"MAD\",\"name\":\"Moroccan Dirham\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MAD\",\"currencySymbol\":\"MAD\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/admin.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/tools.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/admin746mnijdb/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestafab/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestafab/admin746mnijdb/index.php/common/notifications?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8080\\/prestafab\\/admin746mnijdb\\/index.php?controller=AdminGamification&token=2ae2b29272bb41f3d478829828e10337\";
            var current_id_tab = 133;
        </script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>

<body
  class=\"lang-en adminpsmbomodule\"
  data-base-url=\"/prestafab/admin746mnijdb/index.php\"  data-token=\"Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminDashboard&amp;token=681f69bf50a1acfcc5b9b104f5bc76f1\"></a>
      <span id=\"shop_version\">1.7.7.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3dac1a2c6afe16ab927d8d96a75f8fda\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php/improve/modules/manage?token=1a9ef1dcb637d8de0f34f6a1c15a244c\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php/sell/catalog/categories/new?token=1a9ef1dcb637d8de0f34f6a1c15a244c\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php/sell/catalog/products/new?token=1a9ef1dcb637d8de0f34f6a1c15a244c\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e917952f74ca1f544272f49db723c9a5\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminOrders&amp;token=a96899f778f46fd9285f6232802e8904\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"194\"
        data-icon=\"icon-AdminParentModulesCatalog\"
        data-method=\"add\"
        data-url=\"index.php/modules/addons/modules/catalog?-c3rLEQF8\"
        data-post-link=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminQuickAccesses&token=a4941ec7e2067ade2690c76496f7f5cf\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Module Catalog - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminQuickAccesses&token=a4941ec7e2067ade2690c76496f7f5cf\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestafab/admin746mnijdb/index.php?controller=AdminSearch&amp;token=5945f23b5844138a5e058b8befe4d8ad\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
             href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/performance/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/prestafab/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Did you check your conversion rate lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you considered selling on marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              That's more time for something else!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/azzouz.youssef96%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Youssef</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/employees/1/edit?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\">
      <i class=\"material-icons\">settings</i>
      Your profile
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminLogin&amp;logout=1&amp;token=a931d3410bead54c7bd5e75fd61eef01\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestafab/admin746mnijdb/index.php/configure/advanced/employees/toggle-navigation?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminDashboard&amp;token=681f69bf50a1acfcc5b9b104f5bc76f1\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/invoices/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/credit-slips/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/orders/delivery-slips/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCarts&amp;token=5bef95a1bd6bb5fa230d4a843d85cb5e\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/products?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/products?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/categories?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/monitoring/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminAttributesGroups&amp;token=c0cc9de9823ed8c9fc30556d3b981d55\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/catalog/brands/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/attachments/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCartRules&amp;token=e917952f74ca1f544272f49db723c9a5\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/stocks/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/sell/customers/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/customers/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/addresses/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCustomerThreads&amp;token=20a003b652fa98deb1a96e186a66dd08\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCustomerThreads&amp;token=20a003b652fa98deb1a96e186a66dd08\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/sell/customer-service/order-messages/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminReturn&amp;token=bf9bda36e06a6dda3895b429c730074f\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminMetricsStats&amp;token=ead03e8a582befa040b802e08d394de9\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-AdminMetricsStats\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminMetricsStats&amp;token=ead03e8a582befa040b802e08d394de9\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminLegacyStatsMetrics\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminLegacyStatsMetrics&amp;token=e8a0e3f3652025d88bebec4278b761bf\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/modules/manage?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/modules/manage?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/modules/catalog?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/themes/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/themes/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/themes/catalog?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/mail_theme/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/cms-pages/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/design/modules/positions/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminImages&amp;token=1d61ede1e0dc8a7dddc48608fd29427d\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/modules/link-widget/list?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCarriers&amp;token=c1fd72f1af28841cbfe4e1b99a268af5\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminCarriers&amp;token=c1fd72f1af28841cbfe4e1b99a268af5\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/shipping/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/payment/payment_methods?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/payment/payment_methods?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/payment/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/localization/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/localization/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminZones&amp;token=0d927e2ed516ac56be25145654710b90\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/taxes/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/improve/international/translations/settings?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/preferences/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/preferences/preferences?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/order-preferences/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/product-preferences/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/customer-preferences/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/contacts/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/shop/seo-urls/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminSearchConf&amp;token=7eca80d4bb156ae022336220c1102539\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminGamification&amp;token=2ae2b29272bb41f3d478829828e10337\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/system-information/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/system-information/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/performance/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/administration/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/emails/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/import/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/employees/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/sql-requests/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/logs/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestafab/admin746mnijdb/index.php/configure/advanced/webservice-keys/?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Catalog</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Modules catalog          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Connect to Addons marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Connect to Addons marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestafab/admin746mnijdb/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminModules%253Fversion%253D1.7.7.5%2526country%253Den/Help?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/modules/catalog?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" id=\"subtab-AdminPsMboModule\" class=\"nav-link tab active current\" data-submenu=\"133\">
                      Module Catalog
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestafab/admin746mnijdb/index.php/modules/addons/modules/catalog/selection?_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8\" id=\"subtab-AdminPsMboAddons\" class=\"nav-link tab \" data-submenu=\"134\">
                      Module Selections
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
    <!-- begin C:\\wamp64\\www\\prestafab/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended Modules and Services',
        'Close': 'Close',
      },
      recommendedModulesUrl: '/prestafab/admin746mnijdb/index.php/modules/addons/modules/recommended?tabClassName=AdminPsMboModule&_token=Dh60uajfOKCdXEzNmGngKHj_z6XW2fa9JR-c3rLEQF8',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\wamp64\\www\\prestafab/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost:8080/prestafab/admin746mnijdb/index.php?controller=AdminDashboard&amp;token=681f69bf50a1acfcc5b9b104f5bc76f1\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=azzouz.youssef96%40gmail.com&amp;firstname=Youssef&amp;lastname=Azzouz&amp;website=http%3A%2F%2Flocalhost%3A8080%2Fprestafab%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestafab/admin746mnijdb/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=azzouz.youssef96%40gmail.com&amp;firstname=Youssef&amp;lastname=Azzouz&amp;website=http%3A%2F%2Flocalhost%3A8080%2Fprestafab%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__377df4ab535a73aad45d57634579596ce774fe08d1cb564c1c342300c5083864", "");
    }
}
