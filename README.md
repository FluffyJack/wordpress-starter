# FluffyJack Design Wordpress Starter Template

## Welcome

Hi, my name is Jack, and welcome to my repo for the base installation I use on all my Wordpress sites. None of this will really be useful to anyone else but me, but I plan on making this into something anyone else can use.

## Steps

1.  Add an entry to the /etc/hosts file locally
2.  Clone this repo into the folder ~/Dropbox/Development/vhosts/local.clientdomain.com
3.  Setup a database and database user on the server and on the localhost
4.  Edit the config
  1.  Rename local-config.sample.php to local-config.php
  2.  Set the database settings in local-config.php
  3.  Set the database settings in config.php
  4.  Goto [WordPress Salt Generator](https://api.wordpress.org/secret-key/1.1/salt/)
  5.  Set the new salts
5.  Setup a new domain on the server
6.  SSH into the server and setup a new bare git repo
7.  Add a post receive hook
    
        #!/bin/bash
        #
        docroot="/the/domain/directory"
        while read oldrev newrev ref
        do
        branch=`echo $ref | cut -d/ -f3`
        
        if [ "master" == "$branch" ]; then
        git --work-tree=$docroot checkout -f $branch
        fi
        
        done

8.  Add the remote to the local repo and push to it
9.  Go through the installtion on both the server and localhost
10. Configure all the plugins and settings
11. All done, you're ready to start developing