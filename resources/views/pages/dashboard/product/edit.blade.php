<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Product &raquo; {{$item->name}} &raquo; Edit
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div>
        @if($errors->any())
        <div class="mb-5" role="alert">
          <div class="bg-red text-white font-bold rounded px-4 py-2">
            There's something wrong
          </div>
          <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <p>
            <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
            </p>
          </div>
        </div>
        @endif
        <form action="{{route('dashboard.product.update', $item->id)}}" class="w-full" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Name
              </label>
              <input value="{{ old('name') ?? $item->name }}" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" placeholder="Product Name">
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                Description
              </label>
              <textarea name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="description" type="text" placeholder="Product Description">{{ old('description') ?? $item->description }}</textarea>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                Price
              </label>
              <input value="{{ old('price') ?? $item->price }}" name="price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="price" type="number" placeholder="Product Price">
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 text-right">
              <button type="submit" class=" shadow-lg bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Update Product
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('description');
  </script>
</x-app-layout>