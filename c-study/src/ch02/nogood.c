/*  nogood.c -- a program with errors

1. 使用圆括号而不是花括号

2. 声明方式采用以下形式
   int n, n2, n3 或
   int n;
   int n2;
   int n3;

3. 注释 应使用注释结束符号结束注释

*/
#include <stdio.h>
int main(void)
(
    int n, int n2, int n3;
    
/* this program has several errors
    n = 5;
    n2 = n * n;
    n3 = n2 * n2;
    printf("n = %d, n squared = %d, n cubed = %d\n", n, n2, n3)
  
    return 0;
)

