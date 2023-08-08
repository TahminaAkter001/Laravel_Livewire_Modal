<div wire:ignore.self class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">
                    {{ $head}}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    ></button>
            </div>
            
            {{ $slot}}

        </div>
    </div>
</div>