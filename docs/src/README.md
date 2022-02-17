```sh
  _                              _   ___  ____  ___ ___  _   _              _ 
 | |    __ _ _ __ __ ___   _____| | / _ \|  _ \|_ _/ _ \| \ | |  __ _ _ __ (_)
 | |   / _` | '__/ _` \ \ / / _ \ || | | | |_) || | | | |  \| | / _` | '_ \| |
 | |__| (_| | | | (_| |\ V /  __/ || |_| |  _ < | | |_| | |\  || (_| | |_) | |
 |_____\__,_|_|  \__,_| \_/ \___|_(_)___/|_| \_\___\___/|_| \_(_)__,_| .__/|_|
                                                                     |_|                                                  
01001111 01010010 01001001 01001111 01001110 00101110 01000001 01010000 01001001 
```

- For this to work you need to have [composer installed](https://setup-docs.devserv.me/composer/)
- You also need Laravel installed as a global package with composer

```sh
composer global require laravel/installer
```

- [1. Start new project](1-newProject.md)
- [2. Create Database](2-createDatabase.md)
- [3. Some Settings for Sanctum](3-sanctumSettings.md)
- [4. Setup Virtual Host](4-virtualHost.md)
- [5. Folder Permissions](5-folderPermissions.md)
- [6. Add a User](6-addUser.md)
- [7. First API Test](7-firsTest.md)
- [8. Create Model for Orion API](8-createModel.md)
- [9. Ready to go](9-readToGo.md)
- [10. Create Route](10-createRoute.md)
- [11. Create Policy](11-createPolicy.md)
- [12. API Requests](requests/README.md)
  - [12.1. GET Request](requests/121-getAllPosts.md)
  - [12.2. GET Request (single)](requests/122-getSinglePost.md)
  - [12.3. POST Request](requests/123-addPost.md)
  - [12.4. PATCH Request](requests/124-patchPost.md)
  - [12.5. DELETE Request](requests/125-deletePost.md)
- [13. API Filters](filters/README.md)
  - [13.1 Add fields to Model](filters/131-addFieldToModel.md)
  - [13.2 Create and Update Migration](filters/132-createMigration.md)
  - [13.3 Update Posts Factory](filters/133-editFactory.md)
  - [13.4 Create Database Seeder](filters/134-createDBSeeder.md)
- [14. API Sorting](sorting/README.md)
  - [14.1 Update Controller](sorting/141-updateController.md)
  - [14.2 Sort Request](sorting/142-sortRequest.md)
- [15. Laravel Scopes](15-scopes.md)
- [16. Scoped Request](16-scopedRequest.md)
- [17. Pagination](17-pagination.md)
