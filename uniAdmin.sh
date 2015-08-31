#!/bin/bash

# User
# rm src/Uni/AdminBundle/Entity/User.php
php app/console doctrine:generate:entities UniAdminBundle:User --path="src"
#rm src/Uni/AdminBundle/Form/UserType.php
#rm src/Uni/AdminBundle/Controller/UserController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:User --format=yml --with-write --overwrite --no-interaction --route-prefix='user'

# Member
#rm src/Uni/AdminBundle/Entity/Member.php
php app/console doctrine:generate:entities UniAdminBundle:Member --path="src"
#rm src/Uni/AdminBundle/Form/MemberType.php
#rm src/Uni/AdminBundle/Controller/MemberController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:Member --format=yml --with-write --overwrite --no-interaction --route-prefix='member'

# Role
#rm src/Uni/AdminBundle/Entity/Role.php
php app/console doctrine:generate:entities UniAdminBundle:Role --path="src"
#rm src/Uni/AdminBundle/Form/RoleType.php
#rm src/Uni/AdminBundle/Controller/RoleController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:Role --format=yml --with-write --overwrite --no-interaction --route-prefix='role'

# Report
#rm src/Uni/AdminBundle/Entity/Report.php
php app/console doctrine:generate:entities UniAdminBundle:Report --path="src"
#rm src/Uni/AdminBundle/Form/ReportType.php
#rm src/Uni/AdminBundle/Controller/ReportController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:Report --format=yml --with-write --overwrite --no-interaction --route-prefix='report'

# History
#rm src/Uni/AdminBundle/Entity/History.php
php app/console doctrine:generate:entities UniAdminBundle:History --path="src"
#rm src/Uni/AdminBundle/Form/HistoryType.php
#rm src/Uni/AdminBundle/Controller/HistoryController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:History --format=yml --with-write --overwrite --no-interaction --route-prefix='history'

# Service
#rm src/Uni/AdminBundle/Entity/Service.php
php app/console doctrine:generate:entities UniAdminBundle:Service --path="src"
#rm src/Uni/AdminBundle/Form/ServiceType.php
#rm src/Uni/AdminBundle/Controller/ServiceController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:Service --format=yml --with-write --overwrite --no-interaction --route-prefix='service'

# Frontpage
#rm src/Uni/AdminBundle/Entity/FrontpagePhoto.php
php app/console doctrine:generate:entities UniAdminBundle:FrontpagePhoto --path="src"
#rm src/Uni/AdminBundle/Entity/Frontpage.php
php app/console doctrine:generate:entities UniAdminBundle:Frontpage --path="src"
#rm src/Uni/AdminBundle/Form/FrontpageType.php
#rm src/Uni/AdminBundle/Controller/FrontpageController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:Frontpage --format=yml --with-write --overwrite --no-interaction --route-prefix='frontpage'

# Notice
#rm src/Uni/AdminBundle/Entity/NoticePhoto.php
php app/console doctrine:generate:entities UniAdminBundle:NoticePhoto --path="src"
#rm src/Uni/AdminBundle/Entity/NoticeCategory.php
php app/console doctrine:generate:entities UniAdminBundle:NoticeCategory --path="src"
#rm src/Uni/AdminBundle/Form/NoticeCategoryType.php
#rm src/Uni/AdminBundle/Controller/NoticeCategoryController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:NoticeCategory --format=yml --with-write --overwrite --no-interaction --route-prefix='noticecategory'
#rm src/Uni/AdminBundle/Entity/Notice.php
php app/console doctrine:generate:entities UniAdminBundle:Notice --path="src"
#rm src/Uni/AdminBundle/Form/NoticeType.php
#rm src/Uni/AdminBundle/Controller/NoticeController.php
php app/console generate:doctrine:crud --entity=UniAdminBundle:Notice --format=yml --with-write --overwrite --no-interaction --route-prefix='notice'

# Old
#rm src/Uni/AdminBundle/Entity/NoticePhoto.php
#rm src/Uni/AdminBundle/Controller/NoticePhotoController.php
#rm src/Uni/AdminBundle/Form/NoticePhotoType.php
#php app/console doctrine:generate:entities UniAdminBundle:NoticePhoto --path="src"
#php app/console generate:doctrine:crud --entity=UniAdminBundle:NoticePhoto --format=yml --with-write --overwrite --no-interaction --route-prefix='noticephoto'
#rm src/Uni/AdminBundle/Entity/ReportPhoto.php
#rm src/Uni/AdminBundle/Controller/ReportPhotoController.php
#rm src/Uni/AdminBundle/Form/ReportPhotoType.php
#php app/console doctrine:generate:entities UniAdminBundle:ReportPhoto --path="src"
#php app/console generate:doctrine:crud --entity=UniAdminBundle:ReportPhoto --format=yml --with-write --overwrite --no-interaction --route-prefix='reportphoto'
#rm src/Uni/AdminBundle/Entity/FrontpagePhoto.php
#rm src/Uni/AdminBundle/Controller/FrontpagePhotoController.php
#rm src/Uni/AdminBundle/Form/FrontpagePhotoType.php
#php app/console doctrine:generate:entities UniAdminBundle:FrontpagePhoto --path="src"
#php app/console generate:doctrine:crud --entity=UniAdminBundle:FrontpagePhoto --format=yml --with-write --overwrite --no-interaction --route-prefix='frontpagephoto'
php app/console doctrine:schema:update --force
php app/console cache:clear --env=dev
php app/console cache:clear --env=prod
exit