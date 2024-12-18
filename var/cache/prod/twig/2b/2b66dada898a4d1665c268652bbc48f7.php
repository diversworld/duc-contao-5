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

/* @MarkocupicGalleryCreator/Backend/album_information.html.twig */
class __TwigTemplate_db089ce01ef1ffbb4b073ee4081c551e extends Template
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
        yield "<div class=\"widget long gc-album-info-table\">
    <p>&nbsp;</p>
    <table>
        <tr>
            <td style=\"width:25%\"><strong>";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "album_id", [], "any", false, false, false, 5), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 6
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["album_id"] ?? null), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 9
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "album_date", [], "any", false, false, false, 9), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 10
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["album_date_formatted"] ?? null), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 13
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "album_owners_name", [], "any", false, false, false, 13), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 14
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["album_owners_name"] ?? null), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 17
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "album_name", [], "any", false, false, false, 17), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 18
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["album_name"] ?? null), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 21
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "album_caption", [], "any", false, false, false, 21), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 22
        yield ($context["album_caption"] ?? null);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 25
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "album_thumb", [], "any", false, false, false, 25), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 26
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["album_thumb"] ?? null), "html", null, true);
        yield "</td>
        </tr>
    </table>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MarkocupicGalleryCreator/Backend/album_information.html.twig";
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
        return array (  102 => 26,  98 => 25,  92 => 22,  88 => 21,  82 => 18,  78 => 17,  72 => 14,  68 => 13,  62 => 10,  58 => 9,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicGalleryCreator/Backend/album_information.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/gallery-creator-bundle/templates/Backend/album_information.html.twig");
    }
}
