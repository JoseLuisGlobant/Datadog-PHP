<?php

namespace SkyBilling\Datadog;

if (!extension_loaded('ddtrace')) {
    die('Not Installed Datadog Extension');
}

\DDTrace\trace_method(
    'SkyBilling\App\Service',
    'helloWorld',
    function (\DDTrace\SpanData $span, $args, $ret, $exception) {
        $span->meta['custom.tag'] = 'new_tag';
    }
);


