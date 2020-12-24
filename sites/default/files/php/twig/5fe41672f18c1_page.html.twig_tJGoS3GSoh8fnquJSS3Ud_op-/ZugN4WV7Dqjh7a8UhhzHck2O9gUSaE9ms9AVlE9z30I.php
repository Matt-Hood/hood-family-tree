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

/* themes/custom/hood_family/templates/page.html.twig */
class __TwigTemplate_18f21ccdb55e3e6f2886d29dd626fc381182e50e4c56367ddcab33d54e28631d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'banners' => [$this, 'block_banners'],
            'connect_nav' => [$this, 'block_connect_nav'],
            'header' => [$this, 'block_header'],
            'header_wide_width' => [$this, 'block_header_wide_width'],
            'header_two_left' => [$this, 'block_header_two_left'],
            'header_two_right' => [$this, 'block_header_two_right'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_block_left' => [$this, 'block_content_block_left'],
            'content_block_right' => [$this, 'block_content_block_right'],
            'structured_content' => [$this, 'block_structured_content'],
            'sticky_footer' => [$this, 'block_sticky_footer'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "<script src=\"https://cdn.jsdelivr.net/npm/lax.js\" ></script>
<script>
    window.onload = function() {
        lax.setup() // init

        const updateLax = () => {
            lax.update(window.scrollY)
            window.requestAnimationFrame(updateLax)
        }

        window.requestAnimationFrame(updateLax)
    }
</script>

";
        // line 68
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 69
        echo "

";
        // line 72
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 73
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 110
        echo " 



";
        // line 115
        $this->displayBlock('main', $context, $blocks);
        // line 224
        echo "
";
        // line 225
        if ($this->getAttribute(($context["page"] ?? null), "content_block_left", [])) {
            // line 226
            echo "  ";
            $this->displayBlock('content_block_left', $context, $blocks);
            // line 231
            echo "  ";
        }
        // line 232
        echo "
";
        // line 233
        if ($this->getAttribute(($context["page"] ?? null), "content_block_right", [])) {
            // line 234
            echo "  ";
            $this->displayBlock('content_block_right', $context, $blocks);
            // line 239
            echo "  ";
        }
        // line 240
        echo "
";
        // line 241
        if ($this->getAttribute(($context["page"] ?? null), "structured_content", [])) {
            // line 242
            echo "  ";
            $this->displayBlock('structured_content', $context, $blocks);
            // line 247
            echo "  ";
        }
        // line 248
        echo "
";
        // line 249
        if ($this->getAttribute(($context["page"] ?? null), "sticky_footer", [])) {
            // line 250
            echo "  ";
            $this->displayBlock('sticky_footer', $context, $blocks);
        }
        // line 256
        echo "
";
        // line 257
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 258
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 73
    public function block_navbar($context, array $blocks = [])
    {
        // line 74
        echo "    ";
        // line 75
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 77
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 78
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 81
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 82
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 83
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 85
        echo "      <div class=\"navbar-header\">
        ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 88
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 89
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 96
        echo "      </div>

      
      ";
        // line 100
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 101
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 105
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 106
            echo "        </div>
      ";
        }
        // line 108
        echo "    </header>
  ";
    }

    // line 115
    public function block_main($context, array $blocks = [])
    {
        // line 116
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 119
        if ($this->getAttribute(($context["page"] ?? null), "banners", [])) {
            // line 120
            echo "        ";
            $this->displayBlock('banners', $context, $blocks);
            // line 125
            echo "      ";
        }
        // line 126
        echo "
      ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "connect_nav", [])) {
            // line 128
            echo "        ";
            $this->displayBlock('connect_nav', $context, $blocks);
            // line 133
            echo "      ";
        }
        // line 134
        echo "
      ";
        // line 136
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 137
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 142
            echo "      ";
        }
        // line 143
        echo "
      ";
        // line 144
        if ($this->getAttribute(($context["page"] ?? null), "header_wide_width", [])) {
            // line 145
            echo "        ";
            $this->displayBlock('header_wide_width', $context, $blocks);
            // line 150
            echo "      ";
        }
        // line 151
        echo "
      ";
        // line 153
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header_two_left", [])) {
            // line 154
            echo "        ";
            $this->displayBlock('header_two_left', $context, $blocks);
            // line 159
            echo "      ";
        }
        echo " 

      ";
        // line 162
        echo "      
      ";
        // line 163
        if ($this->getAttribute(($context["page"] ?? null), "header_two_right", [])) {
            // line 164
            echo "        ";
            $this->displayBlock('header_two_right', $context, $blocks);
            // line 169
            echo "      ";
        }
        // line 170
        echo "      

      ";
        // line 173
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 174
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 179
            echo "      ";
        }
        // line 180
        echo "
      ";
        // line 182
        echo "      ";
        // line 183
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 184
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 185
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 186
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 187
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 190
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 193
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 194
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 197
            echo "        ";
        }
        // line 198
        echo "
        ";
        // line 200
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 201
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 204
            echo "        ";
        }
        // line 205
        echo "
        ";
        // line 207
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 211
        echo "      </section>

      ";
        // line 214
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 215
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 220
            echo "      ";
        }
        // line 221
        echo "    </div>
  </div>
";
    }

    // line 120
    public function block_banners($context, array $blocks = [])
    {
        // line 121
        echo "          <div class=\"topBannersRegion\" role=\"heading\">
            ";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banners", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 128
    public function block_connect_nav($context, array $blocks = [])
    {
        // line 129
        echo "          <div class=\"connectNav\" role=\"heading\">
            ";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "connect_nav", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 137
    public function block_header($context, array $blocks = [])
    {
        // line 138
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 139
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 145
    public function block_header_wide_width($context, array $blocks = [])
    {
        // line 146
        echo "          <div class=\"headerWideWidth\" role=\"heading\">
            ";
        // line 147
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_wide_width", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 154
    public function block_header_two_left($context, array $blocks = [])
    {
        // line 155
        echo "          <div class=\"col-sm-4 header_two_left\" role=\"heading\">
            ";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_two_left", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 164
    public function block_header_two_right($context, array $blocks = [])
    {
        // line 165
        echo "          <div class=\"col-sm-8\" role=\"heading\">
            ";
        // line 166
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_two_right", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 174
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 175
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 176
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 194
    public function block_highlighted($context, array $blocks = [])
    {
        // line 195
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 201
    public function block_help($context, array $blocks = [])
    {
        // line 202
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 207
    public function block_content($context, array $blocks = [])
    {
        // line 208
        echo "          <a id=\"main-content\"></a>
          ";
        // line 209
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 215
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 216
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 217
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 226
    public function block_content_block_left($context, array $blocks = [])
    {
        // line 227
        echo "    <div class=\"col-sm-6\" role=\"content_block_left\">
      ";
        // line 228
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_block_left", [])), "html", null, true);
        echo "
      </div> 
    ";
    }

    // line 234
    public function block_content_block_right($context, array $blocks = [])
    {
        // line 235
        echo "    <div class=\"col-sm-6\" role=\"content_block_right\">
      ";
        // line 236
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_block_right", [])), "html", null, true);
        echo "
      </div> 
    ";
    }

    // line 242
    public function block_structured_content($context, array $blocks = [])
    {
        // line 243
        echo "    <div class=\"structured-content container\"> 
      ";
        // line 244
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "structured_content", [])), "html", null, true);
        echo "
      </div> 
    ";
    }

    // line 250
    public function block_sticky_footer($context, array $blocks = [])
    {
        // line 251
        echo "    <div class=\"stickyFooter\" role=\"sticky_footer\">
      ";
        // line 252
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sticky_footer", [])), "html", null, true);
        echo "
    </div>
  ";
    }

    // line 258
    public function block_footer($context, array $blocks = [])
    {
        // line 259
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 260
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/hood_family/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 260,  557 => 259,  554 => 258,  547 => 252,  544 => 251,  541 => 250,  534 => 244,  531 => 243,  528 => 242,  521 => 236,  518 => 235,  515 => 234,  508 => 228,  505 => 227,  502 => 226,  495 => 217,  492 => 216,  489 => 215,  483 => 209,  480 => 208,  477 => 207,  470 => 202,  467 => 201,  460 => 195,  457 => 194,  450 => 176,  447 => 175,  444 => 174,  437 => 166,  434 => 165,  431 => 164,  424 => 156,  421 => 155,  418 => 154,  411 => 147,  408 => 146,  405 => 145,  398 => 139,  395 => 138,  392 => 137,  385 => 130,  382 => 129,  379 => 128,  372 => 122,  369 => 121,  366 => 120,  360 => 221,  357 => 220,  354 => 215,  351 => 214,  347 => 211,  344 => 207,  341 => 205,  338 => 204,  335 => 201,  332 => 200,  329 => 198,  326 => 197,  323 => 194,  320 => 193,  314 => 190,  312 => 187,  311 => 186,  310 => 185,  309 => 184,  308 => 183,  306 => 182,  303 => 180,  300 => 179,  297 => 174,  294 => 173,  290 => 170,  287 => 169,  284 => 164,  282 => 163,  279 => 162,  273 => 159,  270 => 154,  267 => 153,  264 => 151,  261 => 150,  258 => 145,  256 => 144,  253 => 143,  250 => 142,  247 => 137,  244 => 136,  241 => 134,  238 => 133,  235 => 128,  233 => 127,  230 => 126,  227 => 125,  224 => 120,  222 => 119,  215 => 116,  212 => 115,  207 => 108,  203 => 106,  200 => 105,  194 => 102,  191 => 101,  188 => 100,  183 => 96,  174 => 90,  171 => 89,  168 => 88,  164 => 86,  161 => 85,  155 => 83,  153 => 82,  148 => 81,  146 => 78,  145 => 77,  144 => 75,  142 => 74,  139 => 73,  133 => 258,  131 => 257,  128 => 256,  124 => 250,  122 => 249,  119 => 248,  116 => 247,  113 => 242,  111 => 241,  108 => 240,  105 => 239,  102 => 234,  100 => 233,  97 => 232,  94 => 231,  91 => 226,  89 => 225,  86 => 224,  84 => 115,  78 => 110,  74 => 73,  72 => 72,  68 => 69,  66 => 68,  50 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<script src=\"https://cdn.jsdelivr.net/npm/lax.js\" ></script>
<script>
    window.onload = function() {
        lax.setup() // init

        const updateLax = () => {
            lax.update(window.scrollY)
            window.requestAnimationFrame(updateLax)
        }

        window.requestAnimationFrame(updateLax)
    }
</script>

{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}


{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      
      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %} 



{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {% if page.banners %}
        {% block banners %}
          <div class=\"topBannersRegion\" role=\"heading\">
            {{ page.banners }}
          </div>
        {% endblock %}
      {% endif %}

      {% if page.connect_nav %}
        {% block connect_nav %}
          <div class=\"connectNav\" role=\"heading\">
            {{ page.connect_nav }}
          </div>
        {% endblock %}
      {% endif %}

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {% if page.header_wide_width %}
        {% block header_wide_width %}
          <div class=\"headerWideWidth\" role=\"heading\">
            {{ page.header_wide_width }}
          </div>
        {% endblock %}
      {% endif %}

      {# Header Two Left #}
      {% if page.header_two_left %}
        {% block header_two_left %}
          <div class=\"col-sm-4 header_two_left\" role=\"heading\">
            {{ page.header_two_left }}
          </div>
        {% endblock %}
      {% endif %} 

      {# Header Two Right #}
      
      {% if page.header_two_right %}
        {% block header_two_right %}
          <div class=\"col-sm-8\" role=\"heading\">
            {{ page.header_two_right }}
          </div>
        {% endblock %}
      {% endif %}
      

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.content_block_left %}
  {% block content_block_left %}
    <div class=\"col-sm-6\" role=\"content_block_left\">
      {{ page.content_block_left }}
      </div> 
    {% endblock %}
  {% endif %}

{% if page.content_block_right %}
  {% block content_block_right %}
    <div class=\"col-sm-6\" role=\"content_block_right\">
      {{ page.content_block_right }}
      </div> 
    {% endblock %}
  {% endif %}

{% if page.structured_content %}
  {% block structured_content %}
    <div class=\"structured-content container\"> 
      {{ page.structured_content }}
      </div> 
    {% endblock %}
  {% endif %}

{% if page.sticky_footer %}
  {% block sticky_footer %}
    <div class=\"stickyFooter\" role=\"sticky_footer\">
      {{ page.sticky_footer }}
    </div>
  {% endblock %}
{% endif %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/custom/hood_family/templates/page.html.twig", "/Applications/MAMP/hood_family/themes/custom/hood_family/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 68, "if" => 72, "block" => 73];
        static $filters = ["clean_class" => 78, "escape" => 81, "t" => 90];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
