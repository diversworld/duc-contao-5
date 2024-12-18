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

/* @MarkocupicGalleryCreator/Backend/album_thumbnail_list.html.twig */
class __TwigTemplate_a0213c282a0088277b780f1b2e989ce7 extends Template
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
        yield "<div class=\"widget clr gc-preview-thumb\">
    <h3><label for=\"ctrl_thumb\">";
        // line 2
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "album_thumb", [], "any", false, false, false, 2), "html", null, true);
        yield "</label></h3>
    <p style=\"margin-top:.5rem\">";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "drag_items_hint", [], "any", false, false, false, 3), "html", null, true);
        yield "</p>

    <div>
        ";
        // line 6
        if (($context["has_album_thumbs"] ?? null)) {
            // line 7
            yield "            <ul id=\"gcPreviewThumbList\" style=\"display:flex;flex-wrap:wrap\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["album_thumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["thumb"]) {
                // line 9
                yield "                    <li";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "class", [], "any", false, false, false, 9), "html", null, true);
                yield " data-id=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "id", [], "any", false, false, false, 9), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "filename", [], "any", false, false, false, 9));
                yield "\">
                        <input type=\"radio\" name=\"thumb\" value=\"";
                // line 10
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "id", [], "any", false, false, false, 10), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "filename", [], "any", false, false, false, 10));
                yield "\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "attr_checked", [], "any", false, false, false, 10), "html", null, true);
                yield ">
                        ";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "image", [], "any", false, false, false, 11);
                yield "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['thumb'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "            </ul>
        ";
        }
        // line 16
        yield "
        ";
        // line 17
        if (($context["has_child_album_thumbs"] ?? null)) {
            // line 18
            yield "            <h3>";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["trans"] ?? null), "child_albums", [], "any", false, false, false, 18), "html", null, true);
            yield "</h3>
            <ul id=\"gcPreviewThumbListSub\" style=\"display:flex;flex-wrap:wrap\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["child_album_thumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["thumb"]) {
                // line 21
                yield "                    <li";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "class", [], "any", false, false, false, 21), "html", null, true);
                yield " data-id=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "id", [], "any", false, false, false, 21), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "filename", [], "any", false, false, false, 21));
                yield "\">
                        <input type=\"radio\" name=\"thumb\" value=\"";
                // line 22
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "id", [], "any", false, false, false, 22), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "filename", [], "any", false, false, false, 22));
                yield "\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "attr_checked", [], "any", false, false, false, 22), "html", null, true);
                yield ">
                        ";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["thumb"], "image", [], "any", false, false, false, 23);
                yield "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['thumb'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "            </ul>
        ";
        }
        // line 28
        yield "
    </div>
</div>

<script>
    window.addEvent(\"domready\", function () {
        \$\$(\".gc-preview-thumb input\").addEvent(\"click\", function () {
            \$\$(\".gc-preview-thumb li\").removeClass(\"checked\");
            this.getParent(\"li\").addClass(\"checked\");
        });

        /** sort album with drag and drop */
        new Sortables(\"#gcPreviewThumbList\", {
            onComplete: function () {
                let ids = [];
                \$\$(\"#gcPreviewThumbList > li\").each(function (el) {
                    ids.push(el.getProperty(\"data-id\"));
                });
                // ajax request
                if (ids.length > 0) {
                    let myRequest = new Request({
                        url: document.URL + \"&isAjaxRequest=true&pictureSorting=\" + ids.join(),
                        method: \"get\"
                    });
                    // fire request (re-sort album)
                    myRequest.send();
                }
            }
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MarkocupicGalleryCreator/Backend/album_thumbnail_list.html.twig";
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
        return array (  139 => 28,  135 => 26,  126 => 23,  118 => 22,  109 => 21,  105 => 20,  99 => 18,  97 => 17,  94 => 16,  90 => 14,  81 => 11,  73 => 10,  64 => 9,  60 => 8,  57 => 7,  55 => 6,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicGalleryCreator/Backend/album_thumbnail_list.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/gallery-creator-bundle/templates/Backend/album_thumbnail_list.html.twig");
    }
}
