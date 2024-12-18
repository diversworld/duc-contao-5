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

/* @HeimrichHannotContaoMultiColumnEditor/multi_column_editor_default.html.twig */
class __TwigTemplate_de4634313afeb3808df488d816eb69b5 extends Template
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
            'row' => [$this, 'block_row'],
            'row_inner' => [$this, 'block_row_inner'],
            'row_group' => [$this, 'block_row_group'],
            'row_group_fields' => [$this, 'block_row_group_fields'],
            'row_group_field' => [$this, 'block_row_group_field'],
            'row_group_field_default' => [$this, 'block_row_group_field_default'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, Twig\Extension\CoreExtension::trim(("multi-column-editor " . ($context["cssClass"] ?? null))), "html", null, true);
        yield "\" data-env=\"";
        yield ((($context["isBackend"] ?? null)) ? ("backend") : ("frontend"));
        yield "\" data-field=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["fieldName"] ?? null), "html", null, true);
        yield "\" data-table=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["table"] ?? null), "html", null, true);
        yield "\" data-min-row-count=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["minRowCount"] ?? null), "html", null, true);
        yield "\" data-max-row-count=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["maxRowCount"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 2
        if ((((array_key_exists("mceErrors", $context)) ? (Twig\Extension\CoreExtension::default(($context["mceErrors"] ?? null))) : ("")) &&  !Twig\Extension\CoreExtension::testEmpty(($context["mceErrors"] ?? null)))) {
            // line 3
            yield "        <div class=\"form-feedback invalid-feedback\" style=\"display: block;\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mceErrors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["errorMsg"]) {
                // line 5
                yield "                <div class=\"feedback-message\">";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $context["errorMsg"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['errorMsg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            yield "            <br>
        </div>
    ";
        }
        // line 10
        yield "
    ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null)) < 1)) {
            // line 12
            yield "        ";
            if (((array_key_exists("disableAdd", $context)) ? (Twig\Extension\CoreExtension::default(($context["disableAdd"] ?? null), false)) : (false))) {
                // line 13
                yield "            <button class=\"add first";
                if (($context["isBackend"] ?? null)) {
                    yield " tl_submit";
                }
                yield "\" disabled><span>";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.add.default"), "html", null, true);
                yield "</span></button>
        ";
            } else {
                // line 15
                yield "            <a href=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["ajaxAddUrl"] ?? null), "html", null, true);
                yield "\" class=\"add first";
                if (($context["isBackend"] ?? null)) {
                    yield " tl_submit";
                }
                yield "\" title=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.add.default"), "html", null, true);
                yield "\">
                <span>";
                // line 16
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.add.default"), "html", null, true);
                yield "</span>
            </a>
        ";
            }
            // line 19
            yield "    ";
        } else {
            // line 20
            yield "        <div class=\"rows";
            yield ((((array_key_exists("legend", $context)) ? (Twig\Extension\CoreExtension::default(($context["legend"] ?? null))) : (""))) ? (" grouped") : (""));
            yield ((((array_key_exists("sortable", $context)) ? (Twig\Extension\CoreExtension::default(($context["sortable"] ?? null))) : (""))) ? (" sortable") : (""));
            yield "\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["groupRows"] ?? null));
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
            foreach ($context['_seq'] as $context["iterator"] => $context["row"]) {
                // line 22
                yield "                ";
                yield from $this->unwrap()->yieldBlock('row', $context, $blocks);
                // line 90
                yield "            ";
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
            unset($context['_seq'], $context['iterator'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "        </div>
    ";
        }
        // line 93
        yield "</div>
";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "                    <div class=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ("mce-row row_" . Twig\Extension\CoreExtension::trim(($context["iterator"] ?? null))), "html", null, true);
        yield "\" data-index=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["iterator"] ?? null), "html", null, true);
        yield "\">
                        ";
        // line 24
        yield from $this->unwrap()->yieldBlock('row_inner', $context, $blocks);
        // line 58
        yield "                        <div class=\"actions\">
                            ";
        // line 59
        if ( !((array_key_exists("disableAdd", $context)) ? (Twig\Extension\CoreExtension::default(($context["disableAdd"] ?? null))) : (""))) {
            // line 60
            yield "                                <a href=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["ajaxAddUrl"] ?? null), "html", null, true);
            yield "\" class=\"add\" title=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.add.default"), "html", null, true);
            yield "\">
                                    ";
            // line 61
            if (($context["isBackend"] ?? null)) {
                // line 62
                yield "                                        <img src=\"system/themes/flexible/icons/copy.svg\" width=\"16\" height=\"16\">
                                    ";
            } else {
                // line 64
                yield "                                        <span>";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.add.default"), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 66
            yield "                                </a>
                            ";
        }
        // line 68
        yield "                            ";
        if ( !((array_key_exists("disableRemove", $context)) ? (Twig\Extension\CoreExtension::default(($context["disableRemove"] ?? null))) : (""))) {
            // line 69
            yield "                                <a href=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["ajaxDeleteUrl"] ?? null), "html", null, true);
            yield "\" class=\"delete\" title=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.delete.default"), "html", null, true);
            yield "\">
                                    ";
            // line 70
            if (($context["isBackend"] ?? null)) {
                // line 71
                yield "                                        <img src=\"system/themes/flexible/icons/delete.svg\" width=\"16\" height=\"16\">
                                    ";
            } else {
                // line 73
                yield "                                        <span>";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.delete.default"), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 75
            yield "                                </a>
                            ";
        }
        // line 77
        yield "
                            ";
        // line 78
        if (((array_key_exists("sortable", $context)) ? (Twig\Extension\CoreExtension::default(($context["sortable"] ?? null))) : (""))) {
            // line 79
            yield "                                <a class=\"drag-handle\" href=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["ajaxSortUrl"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.sort.default"), "html", null, true);
            yield "\">
                                    ";
            // line 80
            if (($context["isBackend"] ?? null)) {
                // line 81
                yield "                                        <img src=\"system/themes/flexible/icons/drag.svg\" width=\"16\" height=\"16\" alt=\"\">
                                    ";
            } else {
                // line 83
                yield "                                        <span>";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("huh.multicolumneditor.sort.default"), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 85
            yield "                                </a>
                            ";
        }
        // line 87
        yield "                        </div>
                    </div>
                ";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["row"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 26
            yield "                                ";
            yield from $this->unwrap()->yieldBlock('row_group', $context, $blocks);
            // line 56
            yield "                            ";
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
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                        ";
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_group(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "                                    ";
        if ((($context["legend"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "legend", [], "any", true, true, false, 27))) {
            // line 28
            yield "                                        <fieldset id=\"pal_";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "legend", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "class", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "class", [], "any", false, false, false, 28), "tl_tbox")) : ("tl_tbox")), "html", null, true);
            yield ((((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default(($context["class"] ?? null))) : (""))) ? ($this->env->getFilter('escape')->getCallable()($this->env, (" " . ($context["class"] ?? null)), "html", null, true)) : (""));
            yield "\">
                                            <legend onclick=\"AjaxRequest.toggleFieldset(this, '";
            // line 29
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "legend", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            yield "', '";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["table"] ?? null), "html", null, true);
            yield "')\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "legend", [], "any", false, false, false, 29), "lang", [], "any", false, false, false, 29), "html", null, true);
            yield "</legend>
                                    ";
        }
        // line 31
        yield "
                                    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('row_group_fields', $context, $blocks);
        // line 52
        yield "                                    ";
        if ((($context["legend"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "legend", [], "any", true, true, false, 52))) {
            // line 53
            yield "                                        </fieldset>
                                    ";
        }
        // line 55
        yield "                                ";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_group_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "                                        <div class=\"fields long\">
                                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "fields", [], "any", false, false, false, 34));
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
            // line 35
            yield "                                                ";
            yield from $this->unwrap()->yieldBlock('row_group_field', $context, $blocks);
            // line 49
            yield "                                            ";
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
        // line 50
        yield "                                        </div>
                                    ";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_group_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "                                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "type", [], "any", false, false, false, 36) == "hidden")) {
            // line 37
            yield "                                                        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "parse", [], "method", false, false, false, 37);
            yield "
                                                    ";
        } else {
            // line 39
            yield "                                                        ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "datepicker", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "datepicker", [], "any", false, false, false, 39))) : ("")) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "dcaPicker", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "dcaPicker", [], "any", false, false, false, 39))) : ("")))) {
                // line 40
                yield "                                                            ";
                $context["wizard"] = " wizard";
                // line 41
                yield "                                                        ";
            }
            // line 42
            yield "                                                        ";
            yield from $this->unwrap()->yieldBlock('row_group_field_default', $context, $blocks);
            // line 47
            yield "                                                    ";
        }
        // line 48
        yield "                                                ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_group_field_default(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "                                                            <div class=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, Twig\Extension\CoreExtension::trim(((("form-group " . ($context["field"] ?? null)) . ((array_key_exists("wizard", $context)) ? (Twig\Extension\CoreExtension::default(($context["wizard"] ?? null))) : (""))) . ((($context["isBackend"] ?? null)) ? (" col") : ("")))), "html", null, true);
        yield "\" data-name=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "noIndex", [], "any", false, false, false, 43), "html", null, true);
        yield "\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "groupStyle", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "groupStyle", [], "any", false, false, false, 43))) : (""))) {
            yield " style=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "groupStyle", [], "any", false, false, false, 43), "html", null, true);
            yield "\"";
        }
        yield ">
                                                                ";
        // line 44
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "parse", [], "method", false, false, false, 44);
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
        return "@HeimrichHannotContaoMultiColumnEditor/multi_column_editor_default.html.twig";
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
        return array (  476 => 44,  463 => 43,  456 => 42,  451 => 48,  448 => 47,  445 => 42,  442 => 41,  439 => 40,  436 => 39,  430 => 37,  427 => 36,  420 => 35,  414 => 50,  400 => 49,  397 => 35,  380 => 34,  377 => 33,  370 => 32,  365 => 55,  361 => 53,  358 => 52,  356 => 32,  353 => 31,  344 => 29,  336 => 28,  333 => 27,  326 => 26,  321 => 57,  307 => 56,  304 => 26,  286 => 25,  279 => 24,  272 => 87,  268 => 85,  262 => 83,  258 => 81,  256 => 80,  249 => 79,  247 => 78,  244 => 77,  240 => 75,  234 => 73,  230 => 71,  228 => 70,  221 => 69,  218 => 68,  214 => 66,  208 => 64,  204 => 62,  202 => 61,  195 => 60,  193 => 59,  190 => 58,  188 => 24,  181 => 23,  174 => 22,  168 => 93,  164 => 91,  150 => 90,  147 => 22,  130 => 21,  124 => 20,  121 => 19,  115 => 16,  104 => 15,  94 => 13,  91 => 12,  89 => 11,  86 => 10,  81 => 7,  72 => 5,  68 => 4,  65 => 3,  63 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@HeimrichHannotContaoMultiColumnEditor/multi_column_editor_default.html.twig", "/shared/httpd/duc-contao-5/vendor/heimrichhannot/contao-multi-column-editor-bundle/src/Resources/views/multi_column_editor_default.html.twig");
    }
}
