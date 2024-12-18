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

/* @BugBusterContaoDlstatsExport/backend/export_panel.html.twig */
class __TwigTemplate_ec0007c69e214398aa252ee9471411bb extends Template
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
        yield "<style type=\"text/css\">
    .tl_formbody_edit {
        padding-left: 10px;
        padding-right: 10px;
    }

    .tl_form_field {
        width: 100%;
    }

    .tl_form_field label {
        font-weight: bold;
    }

    @media (min-width: 768px) {
        .tl_formbody_edit {
            display: flex;
        }
    }

    @media (min-device-width: 768px) {
        .tl_form_field {
            display: flex;
            align-items: center;
        }

        .tl_form_field label {
            margin-right: .5rem;
        }
    }

    .tl_form_field:not(:last-child) {
        margin-bottom: 1rem;
    }

    @media (min-device-width: 768px) {
        .tl_form_field:not(:last-child) {
            margin-bottom: 0;
            margin-right: 3rem;
        }
    }

    .tl_form_field .tl_submit {
        width: 100%;
    }
</style>
<div class=\"tl_listing_container list_view\">
    ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "REQUEST_TOKEN", [], "any", false, false, false, 49), 'widget');
        yield "
    <div class=\"tl_formbody_edit tl_folder_tlist\">
        <div class=\"tl_form_field\">
            <strong>";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bugbuster.dlstat.export.title");
        yield "</strong>
        </div>
        <div class=\"tl_form_field\">
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 55), 'label');
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 56), 'widget');
        yield "
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 57), 'errors');
        yield "
        </div>
        <div class=\"tl_form_field\">
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 60), 'label');
        yield "
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 61), 'widget');
        yield "
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 62), 'errors');
        yield "
        </div>
        <div class=\"tl_form_field\">
            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "format", [], "any", false, false, false, 65), 'label');
        yield "
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "format", [], "any", false, false, false, 66), 'widget');
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "format", [], "any", false, false, false, 67), 'errors');
        yield "
        </div>
        <div class=\"tl_form_field\">
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 70), 'widget');
        yield "
        </div>
    </div>
    ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@BugBusterContaoDlstatsExport/backend/export_panel.html.twig";
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
        return array (  155 => 73,  149 => 70,  143 => 67,  139 => 66,  135 => 65,  129 => 62,  125 => 61,  121 => 60,  115 => 57,  111 => 56,  107 => 55,  101 => 52,  95 => 49,  91 => 48,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@BugBusterContaoDlstatsExport/backend/export_panel.html.twig", "/shared/httpd/duc-contao-5/vendor/bugbuster/contao-dlstats-statistic-export-bundle/src/Resources/views/backend/export_panel.html.twig");
    }
}
