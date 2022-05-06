$('#btnPesquisar').click(function () {
    Request.ajax(
        '/mvc/consultar_produto'

    )
});
