<template>
  <div class="user-section__top--right">
    <a
      class="follow-btn"
      :class="buttonColor"
    >
      <i
        :class="buttonIcon"
      ></i>
      {{ buttonText }}
    </a>
  </div>
</template>

<script>
  export default {
    props: {
      initialIsFollowedBy: {
        type: Boolean,
        default: false,
      },
    },
    data() {
      return {
        isFollowedBy: this.initialIsFollowedBy,
      }
    },
    computed: {
      buttonColor() {
        return this.isFollowedBy
          ? 'follow-btn'
          : 'followed-btn'
      },
      buttonIcon() {
        return this.isFollowedBy
          ? 'fas fa-user-plus'
          : 'fas fa-user-check'
      },
      buttonText() {
        return this.isFollowedBy
          ? 'フォロー'
          : 'フォロー中'
      },
    },
  }
</script>