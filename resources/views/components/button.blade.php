<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block rounded-lg shadow bg-ppblue text-white px-3 font-bold p-2 transition ease-in-out delay-150 hover:-translate-y-0.5 hover:scale-105']) }}>
    {{ $slot }}
</button>
