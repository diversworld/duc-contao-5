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

/* @MarkocupicImportFromCsv/import.html.twig */
class __TwigTemplate_cfa6fb0c2de703a961fa01f47b7faf1e extends Template
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
        yield "<div id=\"tl_buttons\">
    <a href=\"";
        // line 2
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["backHref"] ?? null), "html", null, true);
        yield "\" class=\"ifcb-custom-header-back\" title=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "MSC", [], "any", false, false, false, 2), "backBTTitle", [], "any", false, false, false, 2), "html", null, true);
        yield "\" accesskey=\"b\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "MSC", [], "any", false, false, false, 2), "backBTTitle", [], "any", false, false, false, 2), "html", null, true);
        yield "</a>
    <a href=\"";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["editHref"] ?? null), "html", null, true);
        yield "\" class=\"ifcb-edit-header\" title=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 3), "editItemTitle", [], "any", false, false, false, 3), "html", null, true);
        yield "\" accesskey=\"c\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 3), "editItemTitle", [], "any", false, false, false, 3), "html", null, true);
        yield "</a>
</div>

<div id=\"ifcbImportFromCsvApp\" v-cloak>
    <div v-if=\"status === 'ifcb-status-preparing'\" class=\"ifcb-loader-box ifcb-flex-column\">
        <div class=\"ifcb-flex-center\">
            <div class=\"ifcb-loader\">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class=\"ifcb-flex-center\">
            <div>... ";
        // line 16
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 16), "loading_application", [], "any", false, false, false, 16), "html", null, true);
        yield " ...</div>
        </div>
    </div>

    <form action=\"";
        // line 20
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 20), "html", null, true);
        yield "\" v-bind:class=\"status\" class=\"ifcb-import-from-csv-app tl_form tl_edit_form\" method=\"get\">

        <div class=\"tl_formbody_edit\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 23
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "input", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 24
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "csrfToken", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
            <div class=\"widget\">
                <h2>";
        // line 26
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        yield " [";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "importTable", [], "any", false, false, false, 26), "html", null, true);
        yield "]</h2>
                <br>
                <ul class=\"ifcb-import-summary\">
                    <li>Offset: ";
        // line 29
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "offset", [], "any", false, false, false, 29), "html", null, true);
        yield "</li>
                    <li>Limit: ";
        // line 30
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "limit", [], "any", false, false, false, 30), "html", null, true);
        yield "</li>
                    <li>";
        // line 31
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 31), "data_records", [], "any", false, false, false, 31), "html", null, true);
        yield ": ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["head"] ?? null), "countRows", [], "any", false, false, false, 31), "html", null, true);
        yield "</li>
                    <li class=\"ifcb-import-success\">";
        // line 32
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 32), "successful_inserts", [], "any", false, false, false, 32), "html", null, true);
        yield ": \${report.summary.success}</li>
                    <li class=\"ifcb-import-failure\">";
        // line 33
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 33), "failed_inserts", [], "any", false, false, false, 33), "html", null, true);
        yield ": \${report.summary.errors}</li>
                    <li v-if=\"isTestMode\">Testmode: ON</li>
                </ul>

                <div
                    v-if=\"report.summary.errors>0\">
                    <button v-on:click.prevent=\"filterInsertListing(\$event)\" class=\"tl_submit ifcb-display-errors-btn\" data-lbl-error-only=\"";
        // line 39
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 39), "showErrorsBtn", [], "any", false, false, false, 39), "html", null, true);
        yield "\" data-lbl-all=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 39), "showAllBtn", [], "any", false, false, false, 39), "html", null, true);
        yield "\">
                        ";
        // line 40
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 40), "showErrorsBtn", [], "any", false, false, false, 40), "html", null, true);
        yield "
                    </button>
                </div>

                <div class=\"ifcb-progress-bar-container\">
                    <div id=\"importProgress\" class=\"ifcb-progress-bar-inner\">
                        <span class=\"ifcb-percentage\"></span>
                    </div>
                </div>

                <div class=\"ifcb-status-box tl_message\">
                    <p v-if=\"status === 'ifcb-status-pending'\" class=\"tl_info\">";
        // line 51
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 51), "import_process_started", [], "any", false, false, false, 51), "html", null, true);
        yield "</p>
                    <p v-if=\"status === 'ifcb-status-error'\" class=\"tl_error\">";
        // line 52
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 52), "exception_message", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                    <p v-if=\"status === 'ifcb-status-completed' && report.summary.errors\" class=\"tl_error\">";
        // line 53
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 53), "import_process_completed_with_errors", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                    <p v-if=\"status === 'ifcb-status-completed' && !report.summary.errors\" class=\"tl_confirm\">";
        // line 54
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 54), "import_process_completed", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
                </div>

                ";
        // line 58
        yield "                <div v-if=\"report.logs\" id=\"ifcbImportReportBox\" class=\"ifcb-import-report-box\">
                    <table class=\"ifcb-import-report-table\">
                        <tbody>
                        <template v-for=\"log in report.logs\">

                            <tr v-if=\"log.type === 'failure'\" class=\"ifcb-import-failure\">
                                <td class=\"ifcb-td-title\" colspan=\"2\">#\${log.line} ";
        // line 64
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 64), "data_record_insert_failed", [], "any", false, false, false, 64), "html", null, true);
        yield "
                                    <template v-if=\"log.text !== ''\"><br><br>Exception!<br><br>\${log.text}</template>
                                </td>
                            </tr>

                            <tr v-if=\"log.type === 'success'\" class=\"ifcb-import-success\">
                                <td class=\"ifcb-td-title\" colspan=\"2\">#\${log.line} ";
        // line 70
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 70), "data_record_insert_succeed", [], "any", false, false, false, 70), "html", null, true);
        yield "</td>
                            </tr>

                            <template v-for=\"item in log.values\">
                                <tr v-if=\"log.type === 'failure'\" class=\"ifcb-import-failure\">
                                    <td class=\"col_0\">\${item.column.substr(0,30)}</td>
                                    <td class=\"col_1\">\${item.value.substr(0,90)}</td>
                                </tr>
                                <tr v-if=\"log.type === 'success'\" class=\"ifcb-import-success\">
                                    <td class=\"col_0\">\${item.column.substr(0,30)}</td>
                                    <td class=\"col_1\">\${item.value.substr(0,90)}</td>
                                </tr>
                            </template>

                            <tr class=\"ifcb-delim\">
                                <td class=\"col_0\">&nbsp;</td>
                                <td class=\"col_1\">&nbsp;</td>
                            </tr>

                        </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"tl_formbody_submit\">
            <div class=\"tl_submit_container\">
                <button v-on:click.prevent=\"importAction(true,true)\" type=\"submit\" id=\"btnTest\" name=\"runImportTest\" class=\"tl_submit ifcb-import-test-button\" accesskey=\"p\">
                    ";
        // line 99
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 99), "btnImportTest", [], "any", false, false, false, 99), "html", null, true);
        yield "
                </button>
                &nbsp;
                <button v-on:click.prevent=\"importAction(false,true)\" type=\"submit\" id=\"btnImport\" name=\"runImport\" class=\"tl_submit ifcb-import-button\" accesskey=\"s\" onclick=\"return confirm('";
        // line 102
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 102), "confirm_start_import", [], "any", false, false, false, 102), "html", null, true);
        yield "')\">
                    ";
        // line 103
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tl_import_from_csv", [], "any", false, false, false, 103), "btnImport", [], "any", false, false, false, 103), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    new ImportFromCsvApp('#ifcbImportFromCsvApp', '";
        // line 111
        yield ($context["appMountUrl"] ?? null);
        yield "');
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MarkocupicImportFromCsv/import.html.twig";
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
        return array (  238 => 111,  227 => 103,  223 => 102,  217 => 99,  185 => 70,  176 => 64,  168 => 58,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  136 => 40,  130 => 39,  121 => 33,  117 => 32,  111 => 31,  107 => 30,  103 => 29,  95 => 26,  90 => 24,  86 => 23,  80 => 20,  73 => 16,  53 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MarkocupicImportFromCsv/import.html.twig", "/shared/httpd/duc-contao-5/vendor/markocupic/import-from-csv-bundle/templates/import.html.twig");
    }
}
