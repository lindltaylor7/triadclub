<x-app-layout>
    <div class="container">
        <form action="{{route('dash.redes.update', $rede)}}" class="mt-20 bg-blue-600 rounded-md w-full gap-4 pt-12 pb-12" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="grid grid-cols-1 w-full flex flex-col items-center">
                <div class="text-center"><label for="" class="form-label mx-36 text-center">FACEBOOK <i class="fab fa-facebook-f"></i></label></div>
                
                <div class="w-full"><input id="facebook" name="fb" type="text" class="text-black text-center w-3/4 mx-36 rounded" value="{{$rede->fb}}"></div>
                <br>
                <div class="text-center"><label for="" class="form-label mx-36 text-center">INSTAGRAM <i class="fab fa-instagram"></i></label></div>
                <div class="w-full"><input id="instagram" name="ig" type="text" class="text-black text-center w-3/4 mx-36 rounded" value="{{$rede->ig}}"></div>
                <br>
                <div class="text-center"><label for="" class="form-label mx-36 text-center">YOUTUBE <i class="fab fa-youtube"></i></label></div>
                <div class="w-full"><input id="youtube" name="video_yt" type="text" class="text-black text-center w-3/4 mx-36 rounded" value="{{$rede->video_yt}}"></div>
                <br>
                <div class="text-center"><label for="" class="form-label mx-36 text-center">PÁGINA WEB <i class="fas fa-globe"></i></label></div>
                <div class="w-full"><input id="pagina_web" name="web" type="text" class="text-black text-center w-3/4 mx-36 rounded" value="{{$rede->web}}"></div>
                <br>
                <div class="text-center"><label for="" class="form-label mx-auto text-center">WHATSAPP <i class="fab fa-whatsapp"></i></label></div>
                <div class="w-full"><input id="whatsapp" name="cel" type="text" class="text-black text-center w-3/4 mx-36 rounded" value="{{$empresa->cel}}"></div>
                <br>
                <div class="text-center"><label for="" class="form-label mx-36 text-center">LOGO DE LA EMPRESA</label></div>
                <div class="text-center px-auto"><img class="mx-auto" src="{{Storage::url($empresa->logo)}}"></div>
                <div class="w-full"><input id="logo_empresa" name="logo" type="file" class="text-black text-center w-3/4 mx-36 rounded" value="{{$empresa->logo}}"></div>
            </div>
            <div class="grid grid-cols-1 mt-12 flex flex-col items-center text-center w-full">
                <button type="submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/2 text-center mx-72">Actualizar</button>
            </div>
            
            
            
            
            
        </form>
        <div class="grid grid-cols-1 mt-12 flex flex-col items-center text-center w-full">
            <a href="{{route('dash.redes.index')}}" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/2 text-center mx-72">Atrás</a>
        </div>
    </div>
</x-app-layout>