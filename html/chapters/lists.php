<p>
A list is a simple concept that can provide a lot of power in the world of computer programming. This chapter will cover some of the basics about lists. Lists will be covered more in depth in later chapters (especially the chapter on loops) as related topics are explored.
</p>

<p>
A list, known in some programming languages as an <em>array</em> or a <em>vector</em>, is simply a list of related data stored under a single variable name. Instead of using code like this:
</p>
<pre><code>name1 = "Bob"
name2 = "Sue"
name3 = "Jeff"
name4 = "Sally"

print(name1)
print(name2)
print(name3)
print(name4)</code></pre>
<p>
You can use code like this:
</p>
<pre><code>names = ["Bob", "Sue", "Jeff", "Sally"]

print(names[0])
print(names[1])
print(names[2])
print(names[3])</code></pre>
<p>
In the last code block, the variable <code>names</code> is of type <code>list</code>. So a list is just another data type, just like ints, floats, strings, and booleans are different data types. In this case, <code>names</code> is a list of strings containing four values. All four of these values are names. They might be names of students in a classroom or a list of friends on Facebook or Twitter. Lists are useful for storing data that is related in some way.
</p>

<h2>Using a List Index</h2>

<p>
The last code block uses syntax like <code>names[0]</code>. You might remember similar syntax from the chapter on strings where the square brackets [] can be used to get a character from a string. You might also remember that strings are 0-indexed, meaning that the position of the first character in a string is position 0. Lists work the same way. The list <code>names</code> has four values, so it has indexes 0, 1, 2, and 3. You can use indexes to get data (such as <code>print(names[0])</code>) or to set data (such as <code>names[0] = "Alice"</code>).
</p>

<h2>List Functions</h2>

<h2>Splitting Lists (Sublists)</h2>

<h2>Range Function</h2>

<h2>Parallel Lists</h2>

<!--
Points to make:
x Lists allow you to store multiple values associated with a single name, each value having a specific index 
- Functions: append, insert, remove, pop, clear, index, count, sort, reverse
- Sublists
- Lists allow you to group similar data together
- Parallel lists
- Using the range function
-->
