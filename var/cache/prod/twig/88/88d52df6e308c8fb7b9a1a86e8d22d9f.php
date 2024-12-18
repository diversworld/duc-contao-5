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

/* @MvoContaoGroupWidget/widget_group_reloader.html.twig */
class __TwigTemplate_b8e0cbb72c23e6b351f3bae607354cf0 extends Template
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
        yield "<script type=\"application/javascript\">Backend.autoSubmit('";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["table"] ?? null), "html", null, true);
        yield "');</script>

<div class=\"tl_box\">
    <div class=\"widget\">
        ";
        // line 6
        yield "        <img src=\"system/themes/flexible/icons/loading.svg\" alt=\"Loading…\" width=\"20px\" height=\"20px\">
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
        return "@MvoContaoGroupWidget/widget_group_reloader.html.twig";
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
        return array (  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MvoContaoGroupWidget/widget_group_reloader.html.twig", "/shared/httpd/duc-contao-5/vendor/mvo/contao-group-widget/Resources/views/widget_group_reloader.html.twig");
    }
}
