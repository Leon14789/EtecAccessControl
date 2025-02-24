 // Evento de mudança no select
 $('#teacherSelect').on('change', function() {
    // Pega o ID do professor selecionado
    var teacherId = $(this).val();

    if (teacherId) {
        // Envia a requisição AJAX
        $.ajax({
            url: '/teacher/' + teacherId, // Rota para buscar os dados
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Preenche os campos de veículo e placa com os dados retornados
                if (response.error) {
                    alert(response.error);
                } else {
                    $('#vehicle').val(response.vehicle);
                    $('#plate').val(response.plate);
                }
            },
            error: function() {
                alert('Erro ao buscar dados do professor.');
            }
        });
    } else {
        // Limpa os campos caso nenhum professor seja selecionado
        $('#vehicle').val('');
        $('#plate').val('');
    }
});