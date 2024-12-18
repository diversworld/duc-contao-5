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

/* @MarkocupicGalleryCreator/Backend/image_information.html.twig */
class __TwigTemplate_b424c3582b016f0070737193959f4d0b extends Template
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
        yield "widget gc-image-info-table\">
    <h3><label for=\"ctrl_thumb\">";
        // line 2
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_info", [], "any", false, false, false, 2), "html", null, true);
        yield "</label></h3>
    <table>
        <tr>
            <td style=\"width:20%\"><strong>";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_id", [], "any", false, false, false, 5), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 6
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 9
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_path", [], "any", false, false, false, 9), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 10
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "path", [], "any", false, false, false, 10), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 13
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_filename", [], "any", false, false, false, 13), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 14
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "filename", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 17
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_date", [], "any", false, false, false, 17), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 18
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "date_formatted", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 21
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_owner", [], "any", false, false, false, 21), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 22
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "owner_name", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 25
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_title", [], "any", false, false, false, 25), "html", null, true);
        yield ": </strong></td>
            <td>";
        // line 26
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
        </tr>
        ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "socialMediaSRC", [], "any", false, false, false, 28)) {
            // line 29
            yield "            <tr>
                <td><strong>";
            // line 30
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_video_href_social", [], "any", false, false, false, 30), "html", null, true);
            yield ": </strong></td>
                <td>";
            // line 31
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "video_href_social", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        // line 34
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "localMediaSRC", [], "any", false, false, false, 34)) {
            // line 35
            yield "            <tr>
                <td><strong>";
            // line 36
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "picture_video_href_local", [], "any", false, false, false, 36), "html", null, true);
            yield ": </strong></td>
                <td>";
            // line 37
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "video_href_local", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        // line 40
        yield "    </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MarkocupicGalleryCreator/Backend/image_information.html.twig";
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
        return array (  146 => 40,  140 => 37,  136 => 36,  133 => 35,  130 => 34,  124 => 31,  120 => 30,  117 => 29,  115 => 28,  110 => 26,  106 => 25,  100 => 22,  96 => 21,  90 => 18,  86 => 17,  80 => 14,  76 => 13,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  50 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicGalleryCreator/Backend/image_information.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/gallery-creator-bundle/templates/Backend/image_information.html.twig");
    }
}
