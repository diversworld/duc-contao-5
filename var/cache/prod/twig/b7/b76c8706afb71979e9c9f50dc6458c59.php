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

/* @Contao_ContaoCoreBundle/component/_picture.html.twig */
class __TwigTemplate_bd7b51389847e634393e1184446253a6 extends Template
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
            'picture_component' => [$this, 'block_picture_component'],
            'image' => [$this, 'block_image'],
            'sources' => [$this, 'block_sources'],
            'source' => [$this, 'block_source'],
            'schema_org' => [$this, 'block_schema_org'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "
";
        // line 25
        yield from $this->unwrap()->yieldBlock('picture_component', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_picture_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "    ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 26), "sources", [], "any", false, false, false, 26)) {
            // line 27
            yield "        ";
            // line 28
            yield "        ";
            yield from $this->unwrap()->yieldBlock('image', $context, $blocks);
            // line 46
            yield "    ";
        } else {
            // line 47
            yield "        ";
            // line 48
            yield "        ";
            $context["picture_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "mergeWith", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 49
($context["figure"] ?? null), "options", [], "any", false, true, false, 49), "picture_attr", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 49), "picture_attr", [], "any", false, false, false, 49))) : (""))], "method", false, false, false, 48), "mergeWith", [((            // line 50
array_key_exists("picture_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["picture_attributes"] ?? null))) : (""))], "method", false, false, false, 49);
            // line 52
            yield "        <picture";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["picture_attributes"] ?? null), "contao_html", null, true);
            yield ">
            ";
            // line 53
            yield from $this->unwrap()->yieldBlock('sources', $context, $blocks);
            // line 71
            yield "
            ";
            // line 72
            yield from             $this->unwrap()->yieldBlock("image", $context, $blocks);
            yield "
        </picture>
    ";
        }
        // line 75
        yield "
    ";
        // line 77
        yield "    ";
        yield from $this->unwrap()->yieldBlock('schema_org', $context, $blocks);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "            ";
        $context["img"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 29), "img", [], "any", false, false, false, 29);
        // line 30
        yield "            ";
        $context["define_proportions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 30), false)) : (false)) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 30), false)) : (false)));
        // line 31
        yield "            ";
        $context["img_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "set", ["src", CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["img"] ?? null), "src", [], "any", false, false, false, 32)], "method", false, false, false, 31), "set", ["alt", ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33))) : (""))], "method", false, false, false, 32), "setIfExists", ["title", ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34))) : (null))], "method", false, false, false, 33), "setIfExists", ["srcset", (((CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["img"] ?? null), "srcset", [], "any", true, true, false, 35) && (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 35) != CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "src", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 35)) : (null))], "method", false, false, false, 34), "setIfExists", ["sizes", ((CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["img"] ?? null), "sizes", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, false, false, 36))) : (""))], "method", false, false, false, 35), "setIfExists", ["width", ((        // line 37
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 37)) : (null))], "method", false, false, false, 36), "setIfExists", ["height", ((        // line 38
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 38)) : (null))], "method", false, false, false, 37), "setIfExists", ["loading", ((CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["img"] ?? null), "loading", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "loading", [], "any", false, false, false, 39))) : (""))], "method", false, false, false, 38), "addClass", [((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["img"] ?? null), "class", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "class", [], "any", false, false, false, 40))) : (""))], "method", false, false, false, 39), "mergeWith", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["figure"] ?? null), "options", [], "any", false, true, false, 41), "img_attr", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 41), "img_attr", [], "any", false, false, false, 41))) : (""))], "method", false, false, false, 40), "mergeWith", [((        // line 42
array_key_exists("img_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["img_attributes"] ?? null))) : (""))], "method", false, false, false, 41);
        // line 44
        yield "            <img";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["img_attributes"] ?? null), "contao_html", null, true);
        yield ">
        ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sources(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 54), "sources", [], "any", false, false, false, 54));
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
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 55
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('source', $context, $blocks);
            // line 69
            yield "                ";
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
        unset($context['_seq'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "            ";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_source(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "                        ";
        $context["define_proportions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "width", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "width", [], "any", false, false, false, 56), false)) : (false)) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "height", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "height", [], "any", false, false, false, 56), false)) : (false)));
        // line 57
        yield "                        ";
        $context["source_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "set", ["srcset", CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["source"] ?? null), "srcset", [], "any", false, false, false, 58)], "method", false, false, false, 57), "setIfExists", ["sizes", ((CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["source"] ?? null), "sizes", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "sizes", [], "any", false, false, false, 59))) : (""))], "method", false, false, false, 58), "setIfExists", ["media", ((CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["source"] ?? null), "media", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "media", [], "any", false, false, false, 60))) : (""))], "method", false, false, false, 59), "setIfExists", ["type", ((CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["source"] ?? null), "type", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "type", [], "any", false, false, false, 61))) : (""))], "method", false, false, false, 60), "setIfExists", ["width", ((        // line 62
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "width", [], "any", false, false, false, 62)) : (null))], "method", false, false, false, 61), "setIfExists", ["height", ((        // line 63
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["source"] ?? null), "height", [], "any", false, false, false, 63)) : (null))], "method", false, false, false, 62), "mergeWith", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["figure"] ?? null), "options", [], "any", false, true, false, 64), "picture_attr", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 64), "picture_attr", [], "any", false, false, false, 64))) : (""))], "method", false, false, false, 63), "mergeWith", [((        // line 65
array_key_exists("source_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["source_attributes"] ?? null))) : (""))], "method", false, false, false, 64);
        // line 67
        yield "                        <source";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["source_attributes"] ?? null), "contao_html", null, true);
        yield ">
                    ";
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_schema_org(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 78
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", false, false, false, 78), false)) : (false))) {
            // line 79
            yield "            ";
            $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\SchemaOrgRuntime')->add(CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", false, false, false, 79));
            // line 80
            yield "        ";
        }
        // line 81
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Contao_ContaoCoreBundle/component/_picture.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  231 => 81,  228 => 80,  225 => 79,  222 => 78,  215 => 77,  207 => 67,  205 => 65,  204 => 64,  203 => 63,  202 => 62,  201 => 61,  200 => 60,  199 => 59,  198 => 58,  196 => 57,  193 => 56,  186 => 55,  181 => 70,  167 => 69,  164 => 55,  146 => 54,  139 => 53,  131 => 44,  129 => 42,  128 => 41,  127 => 40,  126 => 39,  125 => 38,  124 => 37,  123 => 36,  122 => 35,  121 => 34,  120 => 33,  119 => 32,  117 => 31,  114 => 30,  111 => 29,  104 => 28,  98 => 77,  95 => 75,  89 => 72,  86 => 71,  84 => 53,  79 => 52,  77 => 50,  76 => 49,  74 => 48,  72 => 47,  69 => 46,  66 => 28,  64 => 27,  61 => 26,  50 => 25,  47 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Contao_ContaoCoreBundle/component/_picture.html.twig", "/shared/httpd/duc-contao-5/vendor/contao/core-bundle/contao/templates/twig/component/_picture.html.twig");
    }
}
