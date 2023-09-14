#Datadog Custom Instrumentation

###1. Install Datadog Agent 

[Install Datadog Agent](https://docs.datadoghq.com/agent/)

###2. Install Datadog extensions for PHP 

[PHP Documentation](https://docs.datadoghq.com/tracing/trace_collection/dd_libraries/php/)

Installer:

    curl -LO https://github.com/DataDog/dd-trace-php/releases/latest/download/datadog-setup.php

Run the installer:

    php datadog-setup.php --php-bin=all --enable-appsec --enable-profiling

Once you have downloaded and executed the installer It's needed to restart the services of the Datadog Agent and the service of PHP


###3. Custom Instrumentation

This project was created based on the documentation of [PHP custom instrumentation.](https://docs.datadoghq.com/tracing/trace_collection/custom_instrumentation/php?tab=currentspan)

1. It loads the datadog/instrumentation.php file by composer.
2. the instrumentation.php file validate if the method helloWorld is executed and report it to Datadog

Expected result:

see the custom trace in Datadog admin with the details

Current result:

The GET request is shown without any custom traces
