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

/* @MarkocupicGalleryCreator/Backend/revise_database.html.twig */
class __TwigTemplate_2705ed2b41c2beff71b99de7b3c17182 extends Template
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
        yield "<div class=\"widget\">
    <div id=\"ctrl_reviseDatabase\" class=\"tl_checkbox_single_container\">
        <input type=\"checkbox\" name=\"reviseDatabase\" class=\"tl_checkbox\" onfocus=\"Backend.getScrollOffset()\">
        <label for=\"reviseDatabase\">";
        // line 4
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "albums_messages_reviseDatabase", [], "any", false, false, false, 4), 0, [], "any", false, false, false, 4), "html", null, true);
        yield "</label>&nbsp;
        <p class=\"tl_help tl_tip\" title=\"\" style=\"margin-top:.5rem\">";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "albums_messages_reviseDatabase", [], "any", false, false, false, 5), 1, [], "any", false, false, false, 5), "html", null, true);
        yield "</p>
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
        return "@MarkocupicGalleryCreator/Backend/revise_database.html.twig";
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
        return array (  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicGalleryCreator/Backend/revise_database.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/gallery-creator-bundle/templates/Backend/revise_database.html.twig");
    }
}
