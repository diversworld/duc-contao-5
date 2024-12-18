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

/* @ContaoEventRegistration/be_event_registration_export.html.twig */
class __TwigTemplate_5370382ac1e039f5eb32ab9aec9f521d extends Template
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

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@Contao_ContaoCoreBundle/be_main.html5";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Contao_ContaoCoreBundle/be_main.html5", "@ContaoEventRegistration/be_event_registration_export.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <div id=\"tl_buttons\">
        <a href=\"";
        // line 6
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["backUrl"] ?? null), "html", null, true);
        yield "\" class=\"header_back\" title=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.backBTTitle", [], "contao_default"), "html", null, true);
        yield "\" accesskey=\"b\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.backBT", [], "contao_default"), "html", null, true);
        yield "</a>
    </div>

    ";
        // line 9
        yield ($context["messages"] ?? null);
        yield "

    ";
        // line 11
        yield ($context["form"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoEventRegistration/be_event_registration_export.html.twig";
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
        return array (  76 => 11,  71 => 9,  61 => 6,  58 => 5,  51 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoEventRegistration/be_event_registration_export.html.twig", "/shared/httpd/duc-contao-5/vendor/inspiredminds/contao-event-registration/templates/be_event_registration_export.html.twig");
    }
}
