1. Listar todas as tarefas:
Rota: /tarefas
Método: GET
Resposta esperada: Retornar todas as tarefas cadastradas.

2. Criar tarefas:
Rota: /tarefas
Método: POST
Parâmetros: Título(obrigatório); Descrição(obrigatório); Status(obrigatório).
Resposta esperada: Criar uma nova tarefa com um novo ID - contendo o título da tarefa, sua descrição e o status.

3. Visualizar uma única tarefa específica:
Rota: /tarefas/{id}
Método: GET
Parâmetros: ID(obrigatório).
Resposta esperada: Retornar a tarefa específica cadastrada.

4. Atualizar uma tarefa:
Rota: /tarefas/{id}
Método: PUT
Parâmetros: ID(obrigatório); Título(opcional); Descrição(opcional); Status(opcional).
Resposta esperada: Atualizar a tarefa específica mencionada pelo ID.

5. Excluir um tarefa:
Rota: /tarefas/{id}
Método: DELETE
Parâmetros: ID(obrigatório).
Resposta esperada: Excluir a tarefa específica mencionada pelo ID.