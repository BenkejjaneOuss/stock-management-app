@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <category :response="{{ json_encode($categories) }}"></category>
@endsection
@section('JsPlugins')
        <script>
        //var Photoshop = VueColor.Photoshop
        window.Laravel={!! json_encode([
            'csrfToken'=>csrf_token(),
            'url'=>url("/")
        ])
        !!};
    </script>
    <script>

    function deleteCategory(event){
        swal({
            title: 'Êtes-vous sûr ?',
            text: "Voulez-vous vraiment supprimer cette categorie ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Supprimer',
            cancelButtonText: 'Annuler',
            }).then((result) => {

                if (result.value) {
                    axios.delete(window.Laravel.url + "/deleteCategory/"+event) //
                    .then(response => {
                        console.log("success", response);
                        swal(
                            'Supprimé !',
                            'Votre categorie a été supprimé.',
                            'success'
                            )
                        location.reload();
                    })
                    .catch(error => {
                        console.log("error", error)
                    })

                }
            })
    }

    async function updateName(id,value){
        const {value: name} = await swal({
            title: 'Nom',
            input: 'text',
            inputPlaceholder:'Nom',
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && 'Entrez un nom !'
            }
        })
        if (name) {
            axios.put(window.Laravel.url + "/updateCategoryName",{'id':id,'name':name}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    'Le nom de votre categorie a été modifié.',
                    'success'
                    )
                    location.reload();
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }

    

</script>
@endsection