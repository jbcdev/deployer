<?php

return [

    'label'                => 'Команды',
    'deploy_webhook'       => 'Deployments may be triggered by using the following webhook URL',
    'webhook_help'         => 'Помощь по Webhook-ам',
    'webhook_example'      => 'By making an HTTP POST request to this URL you will trigger a new deployment of ' .
                              'the latest commit.',
    'webhook_fields'       => 'Optional POST fields',
    'webhook_reason'       => 'The reason the deployment is being run',
    'webhook_source'       => 'A name to use to indicate who/what triggered the deployment, for instance "CI server"',
    'webhook_branch'       => 'The branch to deploy, if blank it defaults to the branch configured in the project',
    'webhook_update'       => 'Whether a deployment should only run if the currently deployed branch matches to ' .
                              'branch to be deployed, defaults to false',
    'webhook_url'          => 'A URL to link the name to, for example the build details on your CI server',
    'webhook_commands'     => 'A comma seperated list of optional command IDs to run',
    'webhook_optional'     => 'Optional Command IDs',
    'webhook_curl'         => 'Example cURL command',
    'webhook_commit'       => 'The SHA hash of the commit which should be deployed, if blank it defaults to HEAD',
    'reason_example'       => urlencode('Testing the deployment webhook'),
    'generate_webhook'     => 'Generate a new webhook URL (old URL will stop working)',
    'step'                 => 'Шаг',
    'before'               => 'До',
    'name'                 => 'Название',
    'run_as'               => 'Запустить как',
    'migrations'           => 'Миграции',
    'bash'                 => 'Bash-скрипт',
    'servers'              => 'Сервера',
    'default'              => 'Сервер по-умолчанию',
    'options'              => 'Вы должны использовать эти токены в вашем скрипте (нажмите, чтобы посмотреть)',
    'release_id'           => 'ID релиза',
    'release_path'         => 'Полный путь релиза',
    'branch'               => 'Ветка, которая будет собрана',
    'project_path'         => 'Путь до проекта',
    'after'                => 'После',
    'configure'            => 'Настроить',
    'clone'                => 'Создать новый релиз',
    'install'              => 'Установить зависимости Composer-а',
    'activate'             => 'Активировать новый релиз',
    'purge'                => 'Отчистить старые релизы',
    'title'                => 'Команды на шаге\: :step',
    'warning'              => 'Команда не может быть сохранена. Пожалуйста, проверьте форму ниже.',
    'create'               => 'Добавить новую команду',
    'edit'                 => 'Редактировать команду',
    'sha'                  => 'SHA-хэш коммита',
    'short_sha'            => 'Короткий SHA-хэш коммита',
    'deployer_name'        => 'Имя пользователя, который запустил сборку ',
    'deployer_email'       => 'Email пользователя, который запустил сборку',
    'committer_name'       => 'Имя пользователя, который сделал последний коммит',
    'committer_email'      => 'Email пользователя, который сделал последний коммит',
    'none'                 => 'Нет команд для конфигурации',
    'optional'             => 'Опциональный',
    'example'              => 'e.g.',
    'optional_description' => 'Ask at deploy time whether or not the include this step',
    'default_description'  => 'Include this step unless explicitly disabled (e.g. checkbox on by default)',
    'services'             => 'Supported services',
    'services_description' => 'You can use the webhook with these services and the relevant details will be ' .
                              'gathered from the data they send across. The &quot;<em>update_only</em>&quot; and ' .
                              '&quot;<em>commands</em>&quot; parameters may be included in the query string, all ' .
                              'other fields are ignored.',

];