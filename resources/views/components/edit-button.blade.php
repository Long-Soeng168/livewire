@props(['identifier', 'editUrl', 'tooltipText'])
<div class="pb-1">
    <!-- Modal toggle -->
    <a href="{{ $editUrl }}" data-tooltip-target="tooltip-edit-detail-{{ $identifier }}" >
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-pen-line">
            <path d="m18 5-3-3H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
            <path d="M8 18h1" />
            <path d="M18.4 9.6a2 2 0 1 1 3 3L17 17l-4 1 1-4Z" />
        </svg>
    </a>

    <!-- View tootip -->
    <div id="tooltip-edit-detail-{{ $identifier }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
        {{ $tooltipText }}
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</div>
