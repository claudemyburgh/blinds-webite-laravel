<label for="parent_id" class="block text-sm font-medium text-gray-300">Belongs to</label>
<select id="parent_id" name="parent_id"
    @class([
          'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-900',
          'border-red-500' => $errors->has('parent_id')
      ])>
    <option value="">Root Parent</option>
    @foreach($categories as  $cat)
        <option @selected(isset($category) && $category->parent_id == $cat->id || old('parent_id') == $cat->id)
                value="{{ $cat->id }}">
            {{ $cat->title }}
        </option>
    @endforeach
</select>
@error('parent_id')
<p class="text-red-500 mt-1 block">{{ $message }}</p>
@enderror
