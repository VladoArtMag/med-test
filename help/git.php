cd d:/openserver/domains/medin.com
////////////////////
create name user
> git config --global user.name "masta"

create email
> git config --global user.email masta@housemagik.com

edit setting
> git config --list

edit status git and show all files
> git status
.......................например...................................................................

On branch master \\- в ветке мастер

Initial commit

Untracked files:  \\- фацлы за которыми гит не наблюдает
  (use "git add <file>..." to include in what will be committed)

        .gitignore
        .htaccess
        assets/
        css/
        help/
        index-test.php
        index.php
        medin-1.com.clpprj
        medin-2.com.clpprj
        mu_page.sql
        protected/
        themes/

nothing added to commit but untracked files present (use "git add" to track) \\- коммитить нечего
используйте git add .
..................................................................................................
Добавить в игнор
создать файл .gitignor
.................... например ....................................................................
/.gitignor <file>
# все папки assets
**/assets/

..................................................................................................

добавить все файлы
> git add .

добавить один файлы
> git add name.txt
> git add "*.php"

просмотр(игноре) status в папке
> git status --untraked-files=normal
> git status --untraked-files=all
> git status --untraked-files=none

переименовать файл в игнор (извлечь и поставить в игнор, удалить тз просмотра гита)
git rm --cached namefile.php

массовый коммит всех файлов видимых гитом
-a -> все файлы
-m"init" -> (-m->messange),name=init
> git commit -a -m"init"

откат до состояния в репозитории
(откат одного файла)
> git checkout --file.php

история коммитов
> git log

хелп
> git help

хелп логов
> git help log

короткий просмотр коммитов
> git log --pretty=format:"%h - %an, %ar : %s"

коммиты за последние 2 недели
> git log --slince=2.weeks

показывает подробные изменения в коммите(в изм файле), 2 последние
> git log -p -2

хелп по разделам
> git help commit