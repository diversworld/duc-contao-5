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

/* @MarkocupicBackendPasswordRecovery/password_recovery_link.html.twig */
class __TwigTemplate_b9c91ab3ec3f6a5234b597e86d987d39 extends Template
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
        yield "<div class=\"tl_pw_recovery\" id=\"passwordRecovery\">
    <a class=\"tl_submit password_recovery_link\" href=\"";
        // line 2
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["href"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["recoverPassword"] ?? null), "html", null, true);
        yield "</a>
</div>

<script>
    ";
        // line 7
        yield "    document.addEventListener(\"DOMContentLoaded\", () => {
        const pwRecoveryBox = document.getElementById('passwordRecovery');
        const elLocation = document.querySelector('.tl_login_form > .formbody');
        if (pwRecoveryBox && elLocation) {
            elLocation.append(pwRecoveryBox);
            pwRecoveryBox.classList.add('show');
        }
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
        return "@MarkocupicBackendPasswordRecovery/password_recovery_link.html.twig";
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
        return array (  54 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicBackendPasswordRecovery/password_recovery_link.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/backend-password-recovery-bundle/templates/password_recovery_link.html.twig");
    }
}
