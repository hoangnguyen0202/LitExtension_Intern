import random

def change(x, y):
  print(int(y))
  for i in range(1, int(x-y)):
    print(int(y+i))
  if x == y:
    return 0
  if x > y:
    return x - y
  if x <= 0 and y > 0:
    return -1
  if y % 2 == 1:
    return 1 + change(x, y+1)
  else:
    return 1 + change(x, y/2)

y = random.randrange(50, 100)
x = random.randrange(1, 50)
print('x =', x)
print('y =', y)
print('Minimum number of steps: ' + str(int(change(x, y))))