- `ডাটা খুজে বের করতে`
```js
    db.myCollection.find({ name: { $regex: 'a', $options: 'i' } });
```

- `যদি a দিয়ে শুরু হওয়া ডেটা খুঁজতে চান:`
```js
    db.myCollection.find({ name: { $regex: '^a', $options: 'i' } });
```

- `যদি a দিয়ে শেষ হওয়া ডেটা খুঁজতে চান:`
```js
    db.myCollection.find({ name: { $regex: 'a$', $options: 'i' } });
```




