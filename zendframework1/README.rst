*************************
Notejam: Zend Framework 1
*************************

Notejam application implemented using `Zend <http://framework.zend.com/>`_ framework 1.

Zend Framework version: 1.12.13


==========================
Installation and launching
==========================

-----
Clone
-----

Clone the repo:

.. code-block:: bash

    $ git clone git@github.com:komarserjio/notejam.git YOUR_PROJECT_DIR/

-------
Install
-------

Zend Framework 1 do not support composer. Remember when ZF1 was first introduced, composer was not available.

To keep Git repository size minimal, I'm not including ZF1 in Git and you too should not include it in your SCM. So you must get ZF1 by direct download or through public SVN repository. Now a days most are using git so lets continue with direct download.

Go to `Zend <http://framework.zend.com/downloads/latest>`_ and select `ZF1 Release`. At the time of writing, latest in ZF1 series is `ZF 1.12.13`. Minimal package will work but I suggest to download Full Package which contains helpful examples.

Extract the downloaded package. Copy `ZendFramework-1.xx.xx/library/Zend` and paste to `notejam/zendframework1/notejam/library/Zend`.

------
Launch
------

Setup apache/nginx with proper virtual host. Make sure mod_rewrite is enabled for apache. Sample `.htaccess` file is given for apache. We are assuming you set host to `zf1.notejam.dev`. Change URLs accordingly if your virtual host is different.

For more detailed documents, please refer `notejam/zendframework1/notejam/docs` folder.

---------
Run tests
---------

Run unit tests:

Expecting PHP is installed and set in executable path.

.. code-block:: bash

    $ cd YOUR_PROJECT_DIR/zendframework/notejam/tests
    $ phpunit

============
Contribution
============

Do you have php/ZF1 experience? Help the app to follow php and ZF1 best practices.

Please send your pull requests in the ``master`` branch.
Always prepend your commits with framework (ZF1) name. Since `Zend Framework 1` is long name, we used `ZF1` for all Zend Framework 1 related commits:

.. code-block:: bash

    ZF1: Implemented sign in functionality

Read `contribution guide <https://github.com/komarserjio/notejam/blob/master/contribute.rst>`_ for details.
