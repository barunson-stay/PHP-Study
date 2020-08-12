## Collections

    자주 활용하는 메서드의 정의와 리턴 타입 정리
    
* find($id): takes an id and returns a single model. If no matching model exist, it returns null.

* findOrFail($id): takes an id and returns a single model. If no matching model exist, it throws an error1.

* first(): returns the first record found in the database. If no matching model exist, it returns null.

* firstOrFail(): returns the first record found in the database. If no matching model exist, it throws an error1.

* get(): returns a collection of models matching the query.

* pluck($column): returns a collection of just the values in the given column. In previous versions of Laravel this method was called lists.

* toArray(): converts the model/collection into a simple PHP array.

