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

сделать коммит
> git add .
> git commit
переход в другой редактор (VIM)
- пишем комент сверху всего (например "comment")
- сохранение
	-- нажать Esc
	-- внизу написать ":x" (срхранить и выйти)
	-- нажать Enter
- смотрим git log
............... просмотр ........................
Vlado@Vlado-PC MINGW64 /d/OpenServer/domains/medin.com ((da922ad...))
$ git log
commit da922ad073f3fb753d7ef3b45b16deef2d16eb34
Author: masta <masta@housemagik.com>
Date:   Sun Dec 13 22:22:26 2015 +0200

    comment

commit 4c1cf8796b4a5c726264b65f305e815f3b534389
Author: masta <masta@housemagik.com>
Date:   Sun Dec 13 00:48:55 2015 +0200

    help

commit 6376d5ad8973e6f7ed3af59c4862471861f8cde4
Author: masta <masta@housemagik.com>
Date:   Sat Dec 12 22:42:58 2015 +0200

    init
................................................
чтобы вместо VIM использовать редактор Notepad ++
ввести строку
> git config --global core.editor "'C:\Program Files (x86)\Notepad++\notepad++.exe' -multiInst -notabbar -nosession -noPlugin"
можно посмотреть, что изменилось в config 
C:\Users\Vlado\.gitconfig
................ просмотр ................
[user]
	name = masta
	email = masta@housemagik.com

[core]
	editor = 'C:\\Program Files (x86)\\Notepad++\\notepad++.exe' -multiInst -notabbar -nosession -noPlugin
..........................................
Проверка работы
> git status (файл непроиндексирован)
> git add .
> git status (файл проиндексирован)
> git commit (открывается Notepad), пишем в первой строке свой комментарий, сохраняемся, закрываем . В гите видно добавление нового коммита и комента к нему

Создание новой ветки
> git checkout -b auch_moodle
auch_moodle - название ветки
checkout -b - новая ветка

просмотр насваний все веток
> git branch

ветки плюс коммиты
> git branch -v

Переход между ветками
> git checkout master

/////////////////////////////////
