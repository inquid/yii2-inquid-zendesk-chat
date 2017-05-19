<?php

namespace inquid\zendeskchat;

use InvalidArgumentException;

/**
 * This is just an example.
 */
class ZendeskChat extends \yii\base\Widget
{
    public $host;
    const ZENDESK_URL = ".zendesk.com";

    public function init()
    {
        parent::init();
        if ($this->host === null) {
            if (isset(\Yii::$app->params['zendesk_host']))
                $this->host = \Yii::$app->params['zendesk_host'];
            else
                throw new InvalidArgumentException('Missing zendesk host');
        }
        if (!$this->endsWith($this->host, self::ZENDESK_URL)) {
            $this->host = $this->host . self::ZENDESK_URL;
        }
    }

    public function run()
    {
        return "<!-- Start of inquid Zendesk Widget script -->
    <script>/*<![CDATA[*/
        window.zEmbed || function (e, t) {
            var n, o, d, i, s, a = [], r = document.createElement(\"iframe\");
            window.zEmbed = function () {
                a.push(arguments)
            }, window.zE = window.zE || window.zEmbed, r.src = \"javascript:false\", r.title = \"\", r.role = \"presentation\", (r.frameElement || r).style.cssText = \"display: none\", d = document.getElementsByTagName(\"script\"), d = d[d.length - 1], d.parentNode.insertBefore(r, d), i = r.contentWindow, s = i.document;
            try {
                o = s
            } catch (e) {
                n = document.domain, r.src = 'javascript:var d=document.open();d.domain=\"' + n + '\";void(0);', o = s
            }
            o.open()._l = function () {
                var e = this.createElement(\"script\");
                n && (this.domain = n), e.id = \"js-iframe-async\", e.src = \"https://assets.zendesk.com/embeddable_framework/main.js\", this.t = +new Date, this.zendeskHost = \"" . $this->host . "\", this.zEQueue = a, this.body.appendChild(e)
            }, o.write('<body onload=\"document._l();\">'), o.close()
        }();
        /*]]>*/</script>
    <!-- End of inquid Zendesk Widget script -->";
    }

    private function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }
}
