{{--dd($category)--}} 






<div x-data class="flex flex-col">
    <div class="flex">
        <select wire:model.live="category ">
    <option disabled>Select a category...</option>
 
    @foreach (\App\Models\Category::all() as $c)
        <option value="{{ $c->id }}">{{ $c->title }}</option>
    @endforeach
</select>

<button wire:click="add">send</button>

<ul>
        @foreach ($categories as $cat)
            <li>{{ $cat }}</li>
        @endforeach
    </ul>


    </div>
    
    
    
    
    

    
</div>
