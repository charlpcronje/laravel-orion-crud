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

- [1. Start new project](docs/src/1-newProject.md)
- [2. Create Database](docs/src/2-createDatabase.md)
- [3. Some Settings for Sanctum](docs/src/3-sanctumSettings.md)
- [4. Setup Virtual Host](docs/src/4-virtualHost.md)
- [5. Folder Permissions](docs/src/5-folderPermissions.md)
- [6. Add a User](docs/src/6-addUser.md)
- [7. First API Test](docs/src/7-firsTest.md)
- [8. Create Model for Orion API](docs/src/8-createModel.md)
- [9. Ready to go](docs/src/9-readToGo.md)
- [10. Create Route](docs/src/10-createRoute.md)
- [11. Create Policy](docs/src/11-createPolicy.md)
- [12. API Requests](docs/src/requests/README.md)
  - [12.1. GET Request](docs/src/requests/121-getAllPosts.md)
  - [12.2. GET Request (single)](docs/src/requests/122-getSinglePost.md)
  - [12.3. POST Request](docs/src/requests/123-addPost.md)
  - [12.4. PATCH Request](docs/src/requests/124-patchPost.md)
  - [12.5. DELETE Request](docs/src/requests/125-deletePost.md)
- [13. API Filters](docs/src/filters/README.md)
  - [13.1 Add fields to Model](docs/src/filters/131-addFieldToModel.md)
  - [13.2 Create and Update Migration](docs/src/filters/132-createMigration.md)
  - [13.3 Update Posts Factory](docs/src/filters/133-editFactory.md)
  - [13.4 Create Database Seeder](docs/src/filters/134-createDBSeeder.md)
- [14. API Sorting](docs/src/sorting/README.md)
  - [14.1 Update Controller](docs/src/sorting/141-updateController.md)
  - [14.2 Sort Request](docs/src/sorting/142-sortRequest.md)
- [15. Laravel Scopes](docs/src/15-scopes.md)
- [16. Scoped Request](docs/src/16-scopedRequest.md)
- [17. Pagination](docs/src/17-pagination.md)
