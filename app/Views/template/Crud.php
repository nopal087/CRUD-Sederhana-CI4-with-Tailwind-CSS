 <div class="relative overflow-x-auto mb-10">
     <div class="max-w-screen-xl flex flex-wrap  mx-auto p-4">
         <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="fas fa-user-plus"></i> Tambah</button>

         <!-- Main modal -->
         <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
             <div class="relative w-full max-w-md max-h-full">
                 <!-- Modal content -->
                 <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                     <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                         <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                         </svg>
                         <span class="sr-only">Close modal</span>
                     </button>
                     <div class="px-6 py-6 lg:px-8">
                         <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Data</h3>
                         <form class="space-y-6" action="<?= base_url('/') ?>" method="post">
                             <!-- <?= csrf_field() ?> -->
                             <div>
                                 <label for="nama Produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                                 <input type="text" name="nama_produk" id="nama_produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                             </div>
                             <div>
                                 <label for="warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                                 <input type="text" name="warna" id="warna" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                             </div>
                             <div>
                                 <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                 <input type="text" name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                             </div>
                             <div>
                                 <label for="Harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                 <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                             </div>

                             <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>

                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mx-auto">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                 <tr>
                     <th scope="col" class="px-6 py-3">
                         Nama Produk
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Color
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Category
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Price
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Aksi
                     </th>
                 </tr>
             </thead>
             <?php foreach ($beranda as $item) : ?>
                 <tbody>
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                         <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             <?= $item['nama_produk']; ?>
                         </th>
                         <td class="px-6 py-4">
                             <?= $item['warna']; ?>
                         </td>
                         <td class="px-6 py-4">
                             <?= $item['kategori']; ?>
                         </td>
                         <td class="px-6 py-4">
                             <?= $item['harga']; ?>
                         </td>
                         <td class="px-6 py-4">
                             <div class="flex gap-2">
                                 <button data-modal-toggle="edit-<?= $item['id']; ?>" class="text-blue-700"><i class="fas fa-edit"></i></button>

                                 <div id="edit-<?= $item['id']; ?>" data-modal-toggle="authentication-modal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                     <div class="relative w-full max-w-md max-h-full">
                                         <!-- Modal content -->
                                         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                             <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="edit-<?= $item['id']; ?>">
                                                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                     <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                 </svg>
                                                 <span class="sr-only">Close modal</span>
                                             </button>
                                             <div class="px-6 py-6 lg:px-8">
                                                 <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Data</h3>
                                                 <form class="space-y-6" action="<?= base_url('/beranda/' . $item['id']) ?>" method="post">
                                                     <?= csrf_field() ?>
                                                     <input type="hidden" name="_method" value="PUT">
                                                     <div>
                                                         <label for="nama Produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                                                         <input type="text" name="nama_produk" id="nama_produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?= $item['nama_produk']; ?>" required>
                                                     </div>
                                                     <div>
                                                         <label for=" warna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                                                         <input type="text" name="warna" id="warna" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?= $item['warna']; ?>" required>
                                                     </div>
                                                     <div>
                                                         <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                                         <input type="text" name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?= $item['kategori']; ?>" required>
                                                     </div>
                                                     <div>
                                                         <label for="Harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                                         <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?= $item['harga']; ?>" required>
                                                     </div>

                                                     <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" <i class="fas fa-trash text-red-600"></i></button>


                                 <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                     <div class="relative w-full max-w-md max-h-full">
                                         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                             <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                     <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                 </svg>
                                                 <span class="sr-only">Close modal</span>
                                             </button>
                                             <div class="p-6 text-center">
                                                 <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                 </svg>
                                                 <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                                 <div class="flex justify-center">
                                                     <form action="<?= base_url('/' . $item['id']) ?>" method="post">
                                                         <?= csrf_field() ?>
                                                         <input type="hidden" name="_method" value="DELETE">
                                                         <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                             Yes, I'm sure
                                                         </button>
                                                     </form>
                                                     <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                                 </form>
                         </td>
                     </tr>
                 </tbody>
             <?php endforeach ?>
         </table>
     </div>
 </div>