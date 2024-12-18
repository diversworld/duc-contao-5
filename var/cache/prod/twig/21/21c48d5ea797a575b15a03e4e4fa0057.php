<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MarkocupicGalleryCreator/Backend/be_ff_album_tree_field.html.twig */
class __TwigTemplate_b9c9f083c45c014f126155361498f42b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["id"] ?? null), "html", null, true);
        yield "\" class=\"tl_checkbox_container tl_gc_album_tree_widget\">
    <input type=\"hidden\" name=\"";
        // line 2
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "name", [], "any", false, false, false, 2));
        yield "\" value=\"\">

    ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "multiple", [], "any", false, false, false, 4)) {
            // line 5
            yield "    <div class=\"tl_select_trigger\">
        <label for=\"tl_select_trigger\" class=\"tl_select_label\">";
            // line 6
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.selectAll", [], "contao_default"), "html", null, true);
            yield "</label> <input type=\"checkbox\" id=\"tl_select_trigger\" onclick=\"Backend.toggleCheckboxGroup(this,'";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["id"] ?? null), "html", null, true);
            yield "')\" class=\"tl_checkbox\">
    </div>
    <br>
    ";
        }
        // line 10
        yield "
    <div class=\"gc-item-picker\">

        ";
        // line 13
        yield ($context["picker"] ?? null);
        yield "

        ";
        // line 15
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "multiple", [], "any", false, false, false, 15)) {
            // line 16
            yield "        <div class=\"tl_radio_reset\">
            <label for=\"tl_radio_reset\" class=\"tl_radio_label\">";
            // line 17
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.resetSelected", [], "contao_default"), "html", null, true);
            yield "</label> <input type=\"radio\" name=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
            yield "\" id=\"tl_radio_reset\" value=\"\" class=\"tl_tree_radio\">
        </div>
        ";
        }
        // line 20
        yield "
    </div>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MarkocupicGalleryCreator/Backend/be_ff_album_tree_field.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  89 => 20,  81 => 17,  78 => 16,  76 => 15,  71 => 13,  66 => 10,  57 => 6,  54 => 5,  52 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicGalleryCreator/Backend/be_ff_album_tree_field.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/gallery-creator-bundle/templates/Backend/be_ff_album_tree_field.html.twig");
    }
}
