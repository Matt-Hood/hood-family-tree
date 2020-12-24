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

/* themes/custom/hood_family/templates/node--page.html.twig */
class __TwigTemplate_93d984945c0188cf759b728d9bd75925179a2ba30ae95521204b012843aeb584 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<header class=\"hero\">
    <div class=\"container-two spacing\">
        <h1 class=\"primary-title\">The Hood Family Tree</h1>
        <p>If we stay steadfast and strong as a family, we can make it though anything</p>
        <a href=\"#\" class=\"btn\">Explore</a>
    </div>
</header>

<main>

    <section class=\"featured\">
        <div class=\"container-two\">
            <h2 class=\"section-title\">Featured Family, in loving memory</h2>
            <div class=\"split\">
                <a href=\"#\" class=\"featured__item\">
                    <img src=\"/themes/custom/hood_family/images/alman.png\" alt=\"\" class=\"featured__img\">
                    <p class=\"featured__details\"><span class=\"price\">❤</span>Alman Hood</p>
                </a>
                <a href=\"#\" class=\"featured__item\">
                    <img src=\"/themes/custom/hood_family/images/uncle-bob.png\" alt=\"\" class=\"featured__img\">
                    <p class=\"featured__details\"><span class=\"price\">❤</span>Uncle Bob</p>
                </a>
                <a href=\"#\" class=\"featured__item\">
                    <img src=\"/themes/custom/hood_family/images/alman.png\" alt=\"\" class=\"featured__img\">
                    <p class=\"featured__details\"><span class=\"price\">❤</span>Alman Hood</p>
                </a>
            </div>
        </div>
    </section>


    <section class=\"our-products\">
        <div class=\"container-two\">
            <h2 class=\"section-title\">Our Team</h2>

            <article class=\"product shoe-red spacing\">
                <img src=\"img/shoe-1.png\" alt=\"\" class=\"product__image\">
                <h3 class=\"product__title\">Matthew A Hood</h3>
                <p class=\"product__description\">CTO and Full Stack Developer</p>
                <a href=\"\" class=\"btn\">contact now</a>
            </article>

            <article class=\"product shoe-white shoe-left spacing\">
                <img src=\"img/shoe-2.png\" alt=\"\" class=\"product__image\">
                <h3 class=\"product__title\">Jerome Hood</h3>
                <p class=\"product__description\">CEO and business lead</p>
                <a href=\"\" class=\"btn\">contact now</a>
            </article>

            <article class=\"product shoe-blue spacing\">
                <img src=\"img/shoe-3.png\" alt=\"\" class=\"product__image\">
                <h3 class=\"product__title\">Gaynelle Hood</h3>
                <p class=\"product__description\">Director of Design and Social Media</p>
                <a href=\"\" class=\"btn\">contact now</a>
            </article>

        </div>
    </section>

</main>

</body>";
    }

    public function getTemplateName()
    {
        return "themes/custom/hood_family/templates/node--page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<header class=\"hero\">
    <div class=\"container-two spacing\">
        <h1 class=\"primary-title\">The Hood Family Tree</h1>
        <p>If we stay steadfast and strong as a family, we can make it though anything</p>
        <a href=\"#\" class=\"btn\">Explore</a>
    </div>
</header>

<main>

    <section class=\"featured\">
        <div class=\"container-two\">
            <h2 class=\"section-title\">Featured Family, in loving memory</h2>
            <div class=\"split\">
                <a href=\"#\" class=\"featured__item\">
                    <img src=\"/themes/custom/hood_family/images/alman.png\" alt=\"\" class=\"featured__img\">
                    <p class=\"featured__details\"><span class=\"price\">❤</span>Alman Hood</p>
                </a>
                <a href=\"#\" class=\"featured__item\">
                    <img src=\"/themes/custom/hood_family/images/uncle-bob.png\" alt=\"\" class=\"featured__img\">
                    <p class=\"featured__details\"><span class=\"price\">❤</span>Uncle Bob</p>
                </a>
                <a href=\"#\" class=\"featured__item\">
                    <img src=\"/themes/custom/hood_family/images/alman.png\" alt=\"\" class=\"featured__img\">
                    <p class=\"featured__details\"><span class=\"price\">❤</span>Alman Hood</p>
                </a>
            </div>
        </div>
    </section>


    <section class=\"our-products\">
        <div class=\"container-two\">
            <h2 class=\"section-title\">Our Team</h2>

            <article class=\"product shoe-red spacing\">
                <img src=\"img/shoe-1.png\" alt=\"\" class=\"product__image\">
                <h3 class=\"product__title\">Matthew A Hood</h3>
                <p class=\"product__description\">CTO and Full Stack Developer</p>
                <a href=\"\" class=\"btn\">contact now</a>
            </article>

            <article class=\"product shoe-white shoe-left spacing\">
                <img src=\"img/shoe-2.png\" alt=\"\" class=\"product__image\">
                <h3 class=\"product__title\">Jerome Hood</h3>
                <p class=\"product__description\">CEO and business lead</p>
                <a href=\"\" class=\"btn\">contact now</a>
            </article>

            <article class=\"product shoe-blue spacing\">
                <img src=\"img/shoe-3.png\" alt=\"\" class=\"product__image\">
                <h3 class=\"product__title\">Gaynelle Hood</h3>
                <p class=\"product__description\">Director of Design and Social Media</p>
                <a href=\"\" class=\"btn\">contact now</a>
            </article>

        </div>
    </section>

</main>

</body>", "themes/custom/hood_family/templates/node--page.html.twig", "/Applications/MAMP/hood_family/themes/custom/hood_family/templates/node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
