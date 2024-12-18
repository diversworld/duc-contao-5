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

/* @MarkocupicImportFromCsv/help_text.html.twig */
class __TwigTemplate_69b84dc97776dc22e4e6490710a1643a extends Template
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
        yield "<div class=\"widget ifcb-manual ifcb-d-block\">
    <div class=\"ifcb-mb-1\">
        <a href=\"https://github.com/markocupic/import-from-csv-bundle\">
            <img class=\"ifcb-brand-logo\" src=\"bundles/markocupicimportfromcsv/logo.png\">
        </a>
    </div>

    <div class=\"ifcb-help-text\">
        ";
        // line 9
        yield ($context["help_text"] ?? null);
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
        return "@MarkocupicImportFromCsv/help_text.html.twig";
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
        return array (  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicImportFromCsv/help_text.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/import-from-csv-bundle/templates/help_text.html.twig");
    }
}
