<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customers') }}
            </h2>
            @can('customer:create')
                <a class="block rounded-lg shadow bg-ppblue text-white px-3 font-bold p-2 transition ease-in-out delay-150 hover:-translate-y-0.5 hover:scale-105"
                    href="#">
                    <span> {{ __('Create') }}</span>
                </a>
            @endcan
        </div>

    </x-slot>

    <div class="py-2">
        <div class="bg-white p-4"  x-data="{ showBar: false }" >
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-100 sticky top-20" 
                :class="{ 'shadow' : showBar }"
                @scroll.window="showBar = (window.pageYOffset > 20) ? true : false"
                >
                    <tr>
                      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Customergroup</th>
                      <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                  </thead>

                  <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    @foreach ($data as $key => $item)

                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                            <p>{{$item->name}}</p>

                        </th>

                        <td class="px-6 py-4">
                            <span
                              class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
                            >
                              <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                              Active
                            </span>
                          </td>
                          <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                            {{$item->CustomerGroup->name}}
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">

                            @can('customer:delete')
                              <a x-data="{ tooltip: 'Delete' }" href="#">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                  class="h-6 w-6"
                                  x-tooltip="tooltip"
                                >
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                  />
                                </svg>
                              </a>
                          @endcan
                          @can('customer:edit')
                              <a href="{{ route('customers.edit',$item->id) }}">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                  class="h-6 w-6"
                                  x-tooltip="tooltip"
                                >
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                  />
                                </svg>
                              </a>
                            @endcan

                            </div>
                          </td>

                    </tr>

                    @endforeach
                  </tbody>

            </table>

            {!! $data->links() !!}

        </div>
    </div>
</x-app-layout>
