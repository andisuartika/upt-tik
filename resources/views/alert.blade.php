@if(session('succes'))
            <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
              <p class="font-bold">Berhasil!</p>
              <p>{{session('succes')}}</p>
            </div>
@endif