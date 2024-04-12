<div>
    <form wire:submit="submit">
        <div>
            <label for="email">E-Mail</label>
            <input type="text" name="email" id="email" required wire:model="email">
            @error('email')
            <div>
                <p>{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div>
            <span>
                <button type="submit">SUBMIT</button>
            </span>
        </div>
    </form>
</div>
