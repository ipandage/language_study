/* rhodium.c  -- your weight in rhodium */
#include <stdio.h>
int main(void)
{
    float weight;    /* user weight            */
    float value;     /* rhodium equivalent     */

    printf("Are you worth your weight in rhodium?\n");
    printf("Let's check it out.\n");
    printf("Please enter your weight in pounds: ");

/* get input from the user                     */
    // scanf 函数为程序提供键盘输入 %f 指示scanf() 从键盘读取一个浮点数
    scanf("%f", &weight);
/* assume rhodium is $770 per ounce          */
/* 14.5833 converts pounds avd. to ounces troy */

    // 从double类型转换到 float 可能丢失数据
    value = 770.0 * weight * 14.5833;

    // .2f 使浮点数显示到小数点后两位
    printf("Your weight in rhodium is worth $%.2f.\n", value);


    printf("You are easily worth that! If rhodium prices drop,\n");
    printf("eat more to maintain your value.\n");
    
    return 0;
}
