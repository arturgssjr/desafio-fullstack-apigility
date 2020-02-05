<?php
return [
    'Soluti\\V1\\Rest\\Files\\Controller' => [
        'description' => 'API Soluti para listar, cadastrar, alterar e remover arquivos.',
        'entity' => [
            'DELETE' => [
                'description' => 'Endpoint para remover um arquivo específico.',
                'request' => '',
                'response' => '',
            ],
            'PUT' => [
                'description' => 'Endpoint para atualizar um arquivo específico.',
                'request' => '{
   "filename": "",
   "mime": "",
   "path": "",
   "size": 0,
   "createdAt": "",
   "updatedAt": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/files[/:file_id]"
       }
   }
   "filename": "",
   "mime": "",
   "path": "",
   "size": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
            'GET' => [
                'description' => 'Endpoint para listar um arquivo específico.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/files[/:file_id]"
       }
   }
   "filename": "",
   "mime": "",
   "path": "",
   "size": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
            'description' => 'Arquivo específico.',
        ],
        'collection' => [
            'description' => 'Coleção de arquivos.',
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/files"
       },
       "first": {
           "href": "/files?page={page}"
       },
       "prev": {
           "href": "/files?page={page}"
       },
       "next": {
           "href": "/files?page={page}"
       },
       "last": {
           "href": "/files?page={page}"
       }
   }
   "_embedded": {
       "files": [
           {
               "_links": {
                   "self": {
                       "href": "/files[/:files_id]"
                   }
               }
              "filename": "",
              "mime": "",
              "path": "",
              "size": "",
              "createdAt": "",
              "updatedAt": ""
           }
       ]
   }
}',
                'description' => 'Endpoint para listar arquivos.',
            ],
            'POST' => [
                'description' => 'Endpoint para cadastrar um grupo.',
                'request' => '{
   "filename": "",
   "mime": "",
   "path": "",
   "size": 0,
   "createdAt": "",
   "updatedAt": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/files[/:files_id]"
       }
   }
   "filename": "",
   "mime": "",
   "path": "",
   "size": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
        ],
    ],
    'Soluti\\V1\\Rest\\Groups\\Controller' => [
        'description' => 'API Soluti para listar, cadastrar, alterar e remover grupos.',
        'collection' => [
            'description' => 'Coleção de grupos.',
            'GET' => [
                'description' => 'Endpoint para listar grupos.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/groups"
       },
       "first": {
           "href": "/groups?page={page}"
       },
       "prev": {
           "href": "/groups?page={page}"
       },
       "next": {
           "href": "/groups?page={page}"
       },
       "last": {
           "href": "/groups?page={page}"
       }
   }
   "_embedded": {
       "groups": [
           {
               "_links": {
                   "self": {
                       "href": "/groups[/:groups_id]"
                   }
               }
              "name": "",
              "createdAt": "",
              "updatedAt": ""
           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'Endpoint para cadastrar um grupo.',
                'request' => '{
   "name": "",
   "createdAt": "",
   "updatedAt": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/groups[/:groups_id]"
       }
   }
   "name": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
        ],
        'entity' => [
            'description' => 'Grupo específico.',
            'GET' => [
                'description' => 'Endpoint para listar um grupo específico.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/groups[/:groups_id]"
       }
   }
   "name": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
            'PUT' => [
                'request' => '{
   "name": "",
   "createdAt": "",
   "updatedAt": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/groups[/:groups_id]"
       }
   }
   "name": "",
   "createdAt": "",
   "updatedAt": ""
}',
                'description' => 'Endpoint para atualizar um grupo específico.',
            ],
            'DELETE' => [
                'description' => 'Endpoint para remover um grupo específico.',
                'request' => '',
                'response' => '',
            ],
        ],
    ],
    'Soluti\\V1\\Rest\\Users\\Controller' => [
        'description' => 'API Soluti para listar, cadastrar, alterar e remover usuários.',
        'collection' => [
            'description' => 'Coleção de usuários.',
            'GET' => [
                'description' => 'Endpoint para listar usuários.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users"
       },
       "first": {
           "href": "/users?page={page}"
       },
       "prev": {
           "href": "/users?page={page}"
       },
       "next": {
           "href": "/users?page={page}"
       },
       "last": {
           "href": "/users?page={page}"
       }
   }
   "_embedded": {
       "users": [
           {
               "_links": {
                   "self": {
                       "href": "/users[/:users_id]"
                   }
               }
              "name": "",
              "email": "",
              "createdAt": "",
              "updatedAt": ""
           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'Endpoint para cadastrar um usuário.',
                'request' => '{
   "name": "",
   "email": "",
   "createdAt": "",
   "updatedAt": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "name": "",
   "email": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
        ],
        'entity' => [
            'description' => 'Usuário específico.',
            'GET' => [
                'description' => 'Endpoint para listar um usuário específico.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "name": "",
   "email": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
            'PUT' => [
                'description' => 'Endpoint para atualizar um usuário específico.',
                'request' => '{
   "name": "",
   "email": "",
   "createdAt": "",
   "updatedAt": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "name": "",
   "email": "",
   "createdAt": "",
   "updatedAt": ""
}',
            ],
            'DELETE' => [
                'description' => 'Endpoint para remover um usuário específico.',
            ],
        ],
    ],
    'Soluti\\V1\\Rest\\UserFile\\Controller' => [
        'description' => 'API Soluti para cadastrar e remover relacionamento de usuário por arquivo.',
        'collection' => [
            'description' => 'Coleção de relacionamentos.',
            'GET' => [
                'description' => 'Endpoint para listar relacionamentos.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/user-file"
       },
       "first": {
           "href": "/user-file?page={page}"
       },
       "prev": {
           "href": "/user-file?page={page}"
       },
       "next": {
           "href": "/user-file?page={page}"
       },
       "last": {
           "href": "/user-file?page={page}"
       }
   }
   "_embedded": {
       "user_file": [
           {
               "_links": {
                   "self": {
                       "href": "/user-file[/:user_file_id]"
                   }
               }
              "userId": "",
              "fileId": ""
           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'Endpoint para cadatrar um relacionamento.',
                'request' => '{
   "userId": "",
   "fileId": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/user-file[/:user_file_id]"
       }
   }
   "userId": "",
   "fileId": ""
}',
            ],
        ],
        'entity' => [
            'description' => 'Relacionamento específico.',
            'GET' => [
                'description' => 'Endpoint para listar um relacionamento específico.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/user-file[/:user_file_id]"
       }
   }
   "userId": "",
   "fileId": ""
}',
            ],
            'DELETE' => [
                'description' => 'Endpoint para remover um relacionamento.',
            ],
        ],
    ],
];
