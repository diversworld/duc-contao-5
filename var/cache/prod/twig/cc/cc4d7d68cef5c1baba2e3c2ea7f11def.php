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

/* @MarkocupicGalleryCreator/Backend/picture.html.twig */
class __TwigTemplate_a352139a246f1807ec0cfa323e249a58 extends Template
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
        yield "<div class=\"";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["css_class"] ?? null))) {
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["css_class"] ?? null), "html", null, true);
            yield " ";
        }
        yield "widget\" style=\"height:auto;\">
    <h3><label for=\"ctrl_picture\">";
        // line 2
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["basename"] ?? null), "html", null, true);
        yield "</label></h3>
    <img src=\"";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["img_src"] ?? null), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["basename"] ?? null), "html", null, true);
        yield "\" style=\"margin-top:8px; max-width:100%; max-height:300px\">
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MarkocupicGalleryCreator/Backend/picture.html.twig";
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
        return array (  54 => 3,  50 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicGalleryCreator/Backend/picture.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/gallery-creator-bundle/templates/Backend/picture.html.twig");
    }
}
