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

/* @HeimrichHannotContaoMultiColumnEditor/multi_column_editor_contao_palette.html.twig */
class __TwigTemplate_65a70a8e9ad3b7ca4ce776a67153b5e6 extends Template
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
            'row_group_fields' => [$this, 'block_row_group_fields'],
            'row_group_field_default' => [$this, 'block_row_group_field_default'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@HeimrichHannotContaoMultiColumnEditor/multi_column_editor_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@HeimrichHannotContaoMultiColumnEditor/multi_column_editor_default.html.twig", "@HeimrichHannotContaoMultiColumnEditor/multi_column_editor_contao_palette.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_group_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <div>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "fields", [], "any", false, false, false, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["widget"]) {
            // line 6
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("row_group_field", $context, $blocks);
            yield "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "    </div>
";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_group_field_default(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        $context["fieldConfig"] = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "fieldConfigs", [], "any", false, false, false, 12)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["field"] ?? null)] ?? null) : null), "dca", [], "any", false, false, false, 12);
        // line 13
        yield "    <div class=\"widget";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "fieldConfigs", [], "any", false, false, false, 13)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["field"] ?? null)] ?? null) : null), "class", [], "any", false, false, false, 13)) ? ($this->env->getFilter('escape')->getCallable()($this->env, (" " . CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "fieldConfigs", [], "any", false, false, false, 13)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["field"] ?? null)] ?? null) : null), "class", [], "any", false, false, false, 13)), "html", null, true)) : (""));
        yield " ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, Twig\Extension\CoreExtension::trim((((" " . ($context["field"] ?? null)) . ((array_key_exists("wizard", $context)) ? (Twig\Extension\CoreExtension::default(($context["wizard"] ?? null))) : (""))) . ((($context["isBackend"] ?? null)) ? (" col") : ("")))), "html", null, true);
        yield "\" data-name=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "noIndex", [], "any", false, false, false, 13), "html", null, true);
        yield "\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "groupStyle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "groupStyle", [], "any", false, false, false, 13))) : (""))) {
            yield " style=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "groupStyle", [], "any", false, false, false, 13), "html", null, true);
            yield "\"";
        }
        yield ">
        ";
        // line 14
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "parse", [], "method", false, false, false, 14);
        yield "
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@HeimrichHannotContaoMultiColumnEditor/multi_column_editor_contao_palette.html.twig";
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
        return array (  127 => 14,  112 => 13,  109 => 12,  102 => 11,  96 => 8,  79 => 6,  62 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@HeimrichHannotContaoMultiColumnEditor/multi_column_editor_contao_palette.html.twig", "/shared/httpd/duc-contao-5/vendor/heimrichhannot/contao-multi-column-editor-bundle/src/Resources/views/multi_column_editor_contao_palette.html.twig");
    }
}
