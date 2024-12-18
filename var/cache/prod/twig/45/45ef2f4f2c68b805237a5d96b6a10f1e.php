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

/* @MvoContaoGroupWidget/widget_group.html.twig */
class __TwigTemplate_16860c06abd8822afabdf04da1ed2c44 extends Template
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
        if ((($context["type"] ?? null) == "start")) {
            // line 2
            $context["htmlAttributes"] = Twig\Extension\CoreExtension::merge(($context["htmlAttributes"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,             // line 3
($context["htmlAttributes"] ?? null), "class", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["htmlAttributes"] ?? null), "class", [], "any", false, false, false, 3), "")) : ("")) . " widget group-widget"))]);
            // line 5
            yield "<div";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["htmlAttributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield " ";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $context["value"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        <div class=\"group-widget--header\">
            ";
            // line 7
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "label", [], "any", false, false, false, 7)) {
                // line 8
                yield "                <h3>";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "label", [], "any", false, false, false, 8), "html", null, true);
                yield "</h3>
                ";
                // line 9
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "description", [], "any", false, false, false, 9)) {
                    // line 10
                    yield "                    <p class=\"tl_help tl_tip\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "description", [], "any", false, false, false, 10);
                    yield "</p>
                ";
                }
                // line 12
                yield "            ";
            }
            // line 13
            yield "        </div>
        <div class=\"group-widget--container\" data-min=\"";
            // line 14
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "minElements", [], "any", false, false, false, 14), "html", null, true);
            yield "\" data-max=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "maxElements", [], "any", false, false, false, 14), "html", null, true);
            yield "\" data-order=\"";
            yield ((($context["order"] ?? null)) ? ("1") : ("0"));
            yield "\">
";
        } else {
            // line 16
            yield "        </div>
        <div class=\"group-widget--footer\">
            <div class=\"drop-area\"></div>
            <div class=\"controls\">
                <input data-order type=\"hidden\" name=\"group-widget__";
            // line 20
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
                <button type=\"button\" disabled=\"disabled\" data-add title=\"";
            // line 21
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("DCA.new.1", [], "contao_default"), "html", null, true);
            yield "\"></button>
            </div>
        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MvoContaoGroupWidget/widget_group.html.twig";
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
        return array (  104 => 21,  100 => 20,  94 => 16,  85 => 14,  82 => 13,  79 => 12,  73 => 10,  71 => 9,  66 => 8,  64 => 7,  47 => 5,  45 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MvoContaoGroupWidget/widget_group.html.twig", "/shared/httpd/duc-contao-5/vendor/mvo/contao-group-widget/Resources/views/widget_group.html.twig");
    }
}
